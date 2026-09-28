<section class="ms-podcast-hero-section">
  <style>
    .ms-podcast-hero-section,
    .ms-podcast-hero-section *{
      box-sizing:border-box;
    }

    .ms-podcast-hero-section{
      --purple:#5A2EA6;
      --teal:#2FA8A1;
      --dark:#17142b;
      --text:#4f4f5d;
      font-family:Arial,sans-serif;
      background:#ffffff;
      padding:28px 20px 30px;
      overflow:hidden;
    }

    .ms-podcast-hero-wrap{
      max-width:1150px;
      margin:0 auto;
      display:grid;
      grid-template-columns:1fr .95fr;
      gap:50px;
      align-items:center;
    }

    .ms-podcast-content{
      width:100%;
    }

    .ms-podcast-badge{
      display:inline-flex;
      align-items:center;
      gap:8px;
      padding:9px 16px;
      border-radius:50px;
      background:rgba(255,255,255,.86);
      border:1px solid rgba(255,255,255,.95);
      color:var(--purple);
      font-size:13px;
      font-weight:800;
      box-shadow:0 10px 30px rgba(23,20,43,.08);
      margin-bottom:16px;
    }

    .ms-podcast-badge::before{
      content:"";
      width:8px;
      height:8px;
      min-width:8px;
      border-radius:50%;
      background:linear-gradient(
        135deg,
        var(--purple),
        var(--teal)
      );
      animation:msBadgeBlink 1.6s ease-in-out infinite;
    }

    .ms-podcast-title{
      margin:0 0 18px;
      font-size:46px;
      line-height:1.12;
      letter-spacing:-1.4px;
      color:var(--dark);
      font-weight:900;
    }

    .ms-podcast-title span{
      background:linear-gradient(
        135deg,
        var(--purple),
        var(--teal)
      );
      -webkit-background-clip:text;
      background-clip:text;
      -webkit-text-fill-color:transparent;
      color:transparent;
    }

    .ms-podcast-text{
      margin:0 0 12px;
      font-size:16px;
      line-height:1.72;
      color:var(--text);
      text-align:justify;
    }

    .ms-podcast-text:last-child{
      margin-bottom:0;
    }

    .ms-podcast-visual{
      position:relative;
      padding:26px;
      border-radius:34px;
      background:rgba(255,255,255,.70);
      border:1px solid rgba(255,255,255,.92);
      backdrop-filter:blur(24px) saturate(150%);
      -webkit-backdrop-filter:blur(24px) saturate(150%);
      box-shadow:
        inset 0 1px 1px rgba(255,255,255,.95),
        0 28px 75px rgba(23,20,43,.10);
      overflow:hidden;
      animation:msImageFloat 5s ease-in-out infinite;
    }

    .ms-podcast-visual::before{
      content:"";
      position:absolute;
      top:-45px;
      right:-45px;
      width:150px;
      height:150px;
      border-radius:36px;
      background:linear-gradient(
        135deg,
        rgba(90,46,166,.20),
        rgba(47,168,161,.16)
      );
      z-index:1;
      animation:msBlobMove 6s ease-in-out infinite;
    }

    .ms-podcast-image-box{
      position:relative;
      z-index:2;
      width:100%;
      aspect-ratio:1536 / 1024;
      border-radius:26px;
      overflow:hidden;
      box-shadow:0 22px 50px rgba(23,20,43,.18);
    }

    .ms-podcast-image-box img{
      width:100%;
      height:100%;
      display:block;
      object-fit:cover;
      object-position:center;
      border-radius:26px;
      animation:msImageZoom 8s ease-in-out infinite;
    }

    @keyframes msBadgeBlink{
      0%,
      100%{
        opacity:.45;
        transform:scale(.85);
      }

      50%{
        opacity:1;
        transform:scale(1.2);
      }
    }

    @keyframes msImageFloat{
      0%,
      100%{
        transform:translateY(0);
      }

      50%{
        transform:translateY(-8px);
      }
    }

    @keyframes msImageZoom{
      0%,
      100%{
        transform:scale(1);
      }

      50%{
        transform:scale(1.03);
      }
    }

    @keyframes msBlobMove{
      0%,
      100%{
        transform:translate(0,0) rotate(0deg);
      }

      50%{
        transform:translate(-10px,10px) rotate(8deg);
      }
    }

    @media(min-width:768px) and (max-width:991px){
      .ms-podcast-hero-section{
        padding:22px 18px 24px;
      }

      .ms-podcast-hero-wrap{
        grid-template-columns:1fr .95fr;
        gap:26px;
      }

      .ms-podcast-title{
        max-width:440px;
        margin-bottom:14px;
        font-size:34px;
        line-height:1.14;
      }

      .ms-podcast-text{
        margin-bottom:8px;
        font-size:14.5px;
        line-height:1.58;
      }

      .ms-podcast-badge{
        margin-bottom:12px;
        font-size:12px;
      }

      .ms-podcast-visual{
        padding:16px;
        border-radius:26px;
      }

      .ms-podcast-image-box,
      .ms-podcast-image-box img{
        border-radius:22px;
      }
    }

    @media(max-width:767px){
      .ms-podcast-hero-section{
        padding:30px 18px 32px;
      }

      .ms-podcast-hero-wrap{
        grid-template-columns:1fr;
        gap:26px;
        text-align:center;
      }

      .ms-podcast-title{
        margin-bottom:16px;
        font-size:30px;
        line-height:1.18;
        letter-spacing:-.7px;
      }

      .ms-podcast-text{
        margin-bottom:10px;
        font-size:15.5px;
        line-height:1.68;
        text-align:center;
      }

      .ms-podcast-visual{
        padding:18px;
        border-radius:26px;
      }

      .ms-podcast-image-box,
      .ms-podcast-image-box img{
        border-radius:22px;
      }
    }

    @media(prefers-reduced-motion:reduce){
      .ms-podcast-badge::before,
      .ms-podcast-visual,
      .ms-podcast-visual::before,
      .ms-podcast-image-box img{
        animation:none;
      }
    }
  </style>

  <div class="ms-podcast-hero-wrap">

    <div class="ms-podcast-content">

      <span class="ms-podcast-badge">
        Podcast Production Experts
      </span>

      <h2 class="ms-podcast-title">
        Podcast Production Services in
        <span>Delhi NCR</span>
      </h2>

      <p class="ms-podcast-text">
        One of the most effective ways to create authority, share
        knowledge, connect with your audience and build a personal or
        business brand in today's digital world is through the power
        of podcasts.
      </p>

      <p class="ms-podcast-text">
        You could be a founder, coach, consultant, creator, doctor,
        educator, author or industry expert, but a professionally
        produced podcast can help you reach the right audience and
        make an impact.
      </p>

      <p class="ms-podcast-text">
        From individuals to businesses, Minerdia Studio provides a
        complete podcast production service in Delhi NCR, so you do
        not have to worry about camera setup, audio recording,
        lighting or editing.
      </p>

    </div>

    <div class="ms-podcast-visual">
      <div class="ms-podcast-image-box">
        <img
          src="https://minerdiastudio.com/wp-content/uploads/2026/06/podcast-production-service.png"
          alt="Professional Podcast Production Services in Delhi NCR"
          loading="eager"
          fetchpriority="high"
        >
      </div>
    </div>

  </div>
</section>