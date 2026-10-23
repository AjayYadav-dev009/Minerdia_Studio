/* =========================================================
   MINERDIA – ALL FORMS -> GOOGLE SHEETS  (one Apps Script)

   Tabs (created automatically if missing):
     "Service Leads"       service-page forms
     "Get Free Audit Form" free audit popup
     "Home Contact"        home page "Start Your Growth Journey" form

   SETUP
   1. Sheet -> Extensions -> Apps Script -> replace ALL code with this file.
   2. Set SECRET_TOKEN below (same value as SHEETS_TOKEN in config.php).
   3. Deploy -> Manage deployments -> pencil -> Version: "New version" -> Deploy.
      (First time? Deploy -> New deployment -> Web app ->
       Execute as: Me, Who has access: Anyone.)
   The Web app URL goes in config.php (SHEETS_URL_SERVICE) and is
   reused by the audit + contact forms automatically.
   ========================================================= */

var SECRET_TOKEN = 'CHANGE_THIS_TO_A_LONG_RANDOM_STRING';
var TIMEZONE     = 'Asia/Kolkata';

var FORMS = {
  service: {
    tab: 'Service Leads',
    headers: ['Service Page', 'Date', 'Full Name', 'Email', 'Phone Number', 'States'],
    row: function (p) { return [p.page, p.date, p.name, p.email, p.phone, p.state]; }
  },
  audit: {
    tab: 'Get Free Audit Form',
    headers: ['Date', 'Full Name', 'Business Name', 'Website', 'Phone Number', 'Service', 'Budget', 'Page'],
    row: function (p) { return [p.date, p.name, p.business, p.website, p.phone, p.service, p.budget, p.page]; }
  },
  contact: {
    tab: 'Home Contact',
    headers: ['Date', 'Full Name', 'Business Name', 'Phone Number', 'Email', 'Website', 'Service', 'Page'],
    row: function (p) { return [p.date, p.name, p.business, p.phone, p.email, p.website, p.service, p.page]; }
  }
};

function doPost(e) {
  try {
    var p = e.parameter;
    if (p.token !== SECRET_TOKEN) return out({ ok: false, error: 'bad token' });

    var cfg = FORMS[p.form] || FORMS.service;     // older handlers send no "form" = service
    p.date = p.date || Utilities.formatDate(new Date(), TIMEZONE, 'dd/MM/yyyy');

    var ss    = SpreadsheetApp.getActiveSpreadsheet();
    var sheet = ss.getSheetByName(cfg.tab) || ss.insertSheet(cfg.tab);

    if (sheet.getLastRow() === 0) {
      sheet.appendRow(cfg.headers);
      sheet.getRange(1, 1, 1, cfg.headers.length).setFontWeight('bold').setBackground('#ffff00');
    }

    var values = cfg.row(p).map(function (v) { return v === undefined ? '' : v; });
    var range  = sheet.getRange(sheet.getLastRow() + 1, 1, 1, values.length);
    range.setNumberFormat('@');                   // plain text: keeps dates / "+91..." exactly, blocks formulas
    range.setValues([values]);

    return out({ ok: true });
  } catch (err) {
    return out({ ok: false, error: String(err) });
  }
}

function out(obj) {
  return ContentService.createTextOutput(JSON.stringify(obj))
    .setMimeType(ContentService.MimeType.JSON);
}
