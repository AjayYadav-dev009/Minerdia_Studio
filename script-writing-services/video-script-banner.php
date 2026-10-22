<?php
$text = 'This will increase the reach of your content and the likelihood that it will be found more easily.';
?>
<section class="ms-vsb">

    <style>
        .ms-vsb,
        .ms-vsb * {
            box-sizing: border-box;
        }

        .ms-vsb {
            --purple: #5A2EA6;
            width: 100%;
            padding: 20px 20px 50px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-vsb-wrap {
            max-width: 1110px;
            margin: 0 auto;
        }

        /* light lavender bar with purple left/right edges */
        .ms-vsb-box {
            padding: 24px 30px;
            border-left: 2px solid var(--purple);
            border-right: 2px solid var(--purple);
            border-radius: 12px;
            background: linear-gradient(180deg, #FFFFFF 0%, #EFE8FA 100%);
            text-align: center;
            box-shadow: 0 4px 14px rgba(90, 46, 166, .08);
        }

        .ms-vsb-text {
            max-width: 900px;
            margin: 0 auto;
            font-size: 15px;
            line-height: 1.6;
            font-weight: 500;
            color: #111;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-vsb-box {
                padding: 22px 24px;
            }
        }

        @media (max-width: 575px) {
            .ms-vsb {
                padding: 10px 16px 35px;
            }

            .ms-vsb-box {
                padding: 18px 16px;
            }

            .ms-vsb-text {
                font-size: 14px;
            }
        }
    </style>

    <div class="ms-vsb-wrap">
        <div class="ms-vsb-box">
            <p class="ms-vsb-text"><?php echo htmlspecialchars($text); ?></p>
        </div>
    </div>
</section>