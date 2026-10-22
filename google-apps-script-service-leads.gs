/* =========================================================
   MINERDIA – SERVICE LEADS  (Google Apps Script)

   SETUP (2 minutes)
   1. Open your Google Sheet -> Extensions -> Apps Script.
   2. Paste this whole file, replace SECRET_TOKEN below
      (same value as SHEETS_TOKEN in config.php).
   3. Deploy -> New deployment -> type "Web app"
        Execute as: Me      Who has access: Anyone
   4. Copy the Web app URL -> config.php -> SHEETS_URL_SERVICE.
   Re-deploy (New version) any time you change this code.
   ========================================================= */

var SECRET_TOKEN = 'CHANGE_THIS_TO_A_LONG_RANDOM_STRING';
var SHEET_NAME   = 'Service Leads';

function doPost(e) {
  try {
    var p = e.parameter;
    if (p.token !== SECRET_TOKEN) return out({ ok: false, error: 'bad token' });

    var ss    = SpreadsheetApp.getActiveSpreadsheet();
    var sheet = ss.getSheetByName(SHEET_NAME) || ss.insertSheet(SHEET_NAME);

    if (sheet.getLastRow() === 0) {
      sheet.appendRow(['Service Page', 'Date', 'Full Name', 'Email', 'Phone Number', 'States']);
      sheet.getRange(1, 1, 1, 6).setFontWeight('bold').setBackground('#ffff00');
    }

    // write as plain text so dates / "+91..." numbers stay exactly as sent
    var row = sheet.getLastRow() + 1;
    var range = sheet.getRange(row, 1, 1, 6);
    range.setNumberFormat('@');
    range.setValues([[p.page, p.date, p.name, p.email, p.phone, p.state]]);

    return out({ ok: true });
  } catch (err) {
    return out({ ok: false, error: String(err) });
  }
}

function out(obj) {
  return ContentService.createTextOutput(JSON.stringify(obj))
    .setMimeType(ContentService.MimeType.JSON);
}
