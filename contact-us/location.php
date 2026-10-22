<?php
// ---------------------------------------------------------------
// Contact details + map: edit values here
// ---------------------------------------------------------------
$business_name = 'Minerdia Studio';
$map_src       = 'https://maps.google.com/maps?q=Minerdia%20Studio&t=m&z=10&output=embed&iwloc=near';

$contacts = [
    [
        'icon'   => 'email',
        'text'   => 'info@minerdiastudio.com',
        'href'   => 'mailto:info@minerdiastudio.com',
        'label'  => 'info@minerdiastudio.com',
        'blank'  => false,
    ],
    [
        'icon'   => 'phone',
        'text'   => '+91 9711555223',
        'href'   => 'tel:+919711555223',
        'label'  => '+91 9711555223',
        'blank'  => false,
    ],
    [
        'icon'   => 'map',
        'text'   => '2nd Floor, Plot no- 456, Kakrola Housing Complex, Opposite Metro Pillar 796, Dwarka Mor, New Delhi-110078',
        'href'   => 'https://share.google/gbBhnoneVPnTiqlZ7',
        'label'  => '2nd Floor, Plot no- 456, Kakrola Housing Complex, Opposite Metro Pillar 796, Dwarka Mor, New Delhi-110078',
        'blank'  => true,
    ],
];

// Icons copied from the original section
$icons = [
    'email' => 'M30.887 30.9c0 0 0-14.113 0-18.813 0-0.194-0.244-0.438-0.481-0.619l-4.919-3.569v-3.944c0-0.388-0.325-0.65-0.65-0.65h-5.606l-2.856-2.081c-0.194-0.131-0.519-0.131-0.719 0l-2.856 2.081h-5.606c-0.388 0-0.65 0.325-0.65 0.65v3.9l-4.981 3.619c-0.294 0.181-0.481 0.419-0.481 0.619 0 4.731 0 18.938 0 18.938 0 0.369 0.294 0.625 0.6 0.65 0.019 0 0.031 0 0.050 0h28.5c0.419-0.006 0.656-0.331 0.656-0.781zM29.65 13.256v16.475l-10.756-8.613 10.756-7.863zM29.169 12.113l-3.681 2.681v-5.388l3.681 2.706zM15.988 2.456l1.144 0.844h-2.294l1.15-0.844zM24.188 4.606v11.137l-8.2 5.975-8.2-5.975v-11.137h16.4zM2.325 13.256l10.756 7.862-10.756 8.663v-16.525zM6.55 14.844l-3.775-2.75 3.775-2.744v5.494zM3.494 30.438l10.631-8.556 1.469 1.075c0.281 0.212 0.494 0.212 0.781 0l1.469-1.075 10.694 8.556h-25.044zM11.631 7.794h8.781v1.237h-8.781v-1.237zM11.631 11.762h8.781v1.238h-8.781v-1.238zM11.631 15.731h8.781v1.238h-8.781v-1.238z',
    'phone' => 'M30.785 25.435l-6.27-6.27c-0.748-0.748-1.966-0.748-2.715 0l-1.631 1.631c-0.511 0.511-0.672 1.24-0.486 1.89l-0.615 0.615c-0 0-0 0-0 0-0.437 0.437-3.158-0.234-6.447-3.523s-3.96-6.009-3.523-6.446c0-0 0-0 0-0l0.616-0.616c0.174 0.050 0.353 0.075 0.533 0.075 0.492 0 0.983-0.187 1.357-0.561l1.63-1.63c0.748-0.748 0.748-1.966 0-2.715l-6.27-6.27c-0.362-0.363-0.845-0.562-1.357-0.562s-0.995 0.2-1.357 0.562l-1.631 1.631c-0.511 0.511-0.672 1.24-0.486 1.89 0 0-0.522 0.527-0.547 0.56-1.735 1.928-2.060 4.964-0.91 8.593 1.126 3.554 3.554 7.318 6.835 10.6s7.046 5.709 10.6 6.835c1.427 0.452 2.763 0.676 3.976 0.676 1.988 0 3.646-0.603 4.834-1.791l0.342-0.342c0.171 0.049 0.35 0.076 0.533 0.076 0.513 0 0.995-0.2 1.357-0.562l1.631-1.631c0.748-0.748 0.748-1.966 0-2.715zM5.607 2.972l6.27 6.27-1.63 1.631c0 0-0-0-0.001-0.001l-6.27-6.27 1.631-1.631zM25.564 29.251c-0 0-0 0-0 0-1.381 1.381-3.822 1.609-6.873 0.642-3.266-1.035-6.754-3.295-9.822-6.363s-5.328-6.556-6.363-9.822c-0.967-3.051-0.739-5.492 0.642-6.873l0.173-0.173 4.866 4.866-0.446 0.446c-0 0-0.001 0.001-0.001 0.001-1.849 1.851 0.373 6.009 3.524 9.16 2.358 2.358 5.281 4.196 7.378 4.196 0.705 0 1.317-0.208 1.783-0.674 0-0 0-0 0-0l0.446-0.446 4.866 4.866-0.173 0.173zM27.797 28.423l-6.27-6.27 1.631-1.631 6.27 6.27c0 0-1.63 1.631-1.631 1.631zM24.301 8.099c-1.826-1.826-4.253-2.831-6.834-2.831-0.53 0-0.96 0.43-0.96 0.96s0.43 0.96 0.96 0.96c2.069-0 4.014 0.806 5.477 2.269s2.268 3.408 2.268 5.476c0 0.53 0.43 0.96 0.96 0.96s0.96-0.43 0.96-0.96c0-2.582-1.005-5.008-2.831-6.834zM27.743 4.657c-2.745-2.745-6.395-4.257-10.277-4.257-0.53 0-0.96 0.43-0.96 0.96s0.43 0.96 0.96 0.96c3.369-0 6.537 1.312 8.919 3.694s3.694 5.55 3.694 8.919c0 0.53 0.43 0.96 0.96 0.96s0.96-0.43 0.96-0.96c0-3.882-1.512-7.532-4.256-10.277zM20.859 11.541c-0.919-0.919-2.092-1.405-3.391-1.405 0 0-0 0-0 0-0.53 0-0.96 0.43-0.96 0.96s0.43 0.96 0.96 0.96c0 0 0 0 0 0 0.79 0 1.475 0.284 2.034 0.843 0.551 0.551 0.843 1.255 0.842 2.034-0 0.53 0.43 0.96 0.96 0.96h0c0.53 0 0.96-0.43 0.96-0.96 0-1.3-0.486-2.472-1.405-3.392z',
    'map'   => 'M15.988 6.775c-3.694 0-6.694 3.006-6.694 6.694s3 6.7 6.694 6.7 6.694-3.006 6.694-6.694-3-6.7-6.694-6.7zM15.988 18.563c-2.806 0-5.088-2.288-5.088-5.088s2.287-5.088 5.088-5.088 5.088 2.287 5.088 5.088-2.275 5.088-5.088 5.088zM15.988 0.4c-0.15 0-0.306 0-0.456 0.006-6.456 0.225-11.787 5.237-12.406 11.662-0.119 1.244-0.056 2.494 0.169 3.688 0 0 0.019 0.15 0.094 0.431 0.194 0.881 0.494 1.744 0.862 2.538 1.331 3.15 4.244 8 10.569 13.25 0.331 0.275 0.75 0.425 1.188 0.425 0.431 0 0.85-0.15 1.188-0.425 6.319-5.244 9.231-10.1 10.556-13.225 0.381-0.819 0.675-1.681 0.869-2.563 0.038-0.156 0.063-0.287 0.087-0.412 0.156-0.806 0.238-1.631 0.238-2.456-0.025-7.119-5.825-12.919-12.956-12.919zM27.106 15.5c0 0.012-0.019 0.125-0.063 0.325-0.175 0.775-0.431 1.525-0.775 2.269-1.262 2.988-4.037 7.6-10.106 12.637-0.056 0.044-0.119 0.056-0.163 0.056-0.037 0-0.106-0.012-0.162-0.056-6.075-5.037-8.856-9.65-10.125-12.656-0.331-0.719-0.588-1.475-0.769-2.25-0.037-0.169-0.056-0.275-0.063-0.306 0-0.012-0.006-0.025-0.006-0.037-0.2-1.069-0.256-2.169-0.15-3.256 0.544-5.625 5.212-10.019 10.869-10.213 6.425-0.225 11.725 4.938 11.725 11.319 0 0.719-0.075 1.438-0.212 2.169z',
];

$e = function ($s) { return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); };
?>
<section class="ms-ci">

    <style>
        .ms-ci,
        .ms-ci * {
            box-sizing: border-box;
        }

        .ms-ci {
            --purple: #5a2ea6;
            width: 100%;
            padding: 24px 20px 24px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-ci-wrap {
            max-width: 1140px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 353fr) minmax(0, 770fr);
            gap: 19px;
            align-items: stretch;
        }

        /* ---------- contact card ---------- */
        .ms-ci-card {
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 40px 24px 40px 12px;
            border-radius: 26px;
            background: #f6f6f6;
            box-shadow: 0 2px 12px rgba(0, 0, 0, .20);
        }

        .ms-ci-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .ms-ci-icon {
            flex: 0 0 40px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #e4dbf5;
            color: var(--purple);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        .ms-ci-icon svg {
            width: 20px;
            height: 20px;
            fill: currentColor;
        }

        .ms-ci-text {
            min-height: 40px;
            display: flex;
            align-items: center;
            min-width: 0;
        }

        .ms-ci-text a {
            font-size: 16px;
            font-weight: 400;
            line-height: 25px;
            color: #000;
            text-decoration: none;
            overflow-wrap: anywhere;
        }

        .ms-ci-text a:hover {
            color: var(--purple);
        }

        /* ---------- map ---------- */
        .ms-ci-map {
            position: relative;
            min-height: 300px;
            border-radius: 26px;
            overflow: hidden;
            background: #e9e9e9;
            box-shadow: 0 2px 12px rgba(0, 0, 0, .20);
        }

        .ms-ci-map iframe {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        @media (max-width: 900px) {
            .ms-ci-wrap {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }

        /* mobile: icon sits above the text (like the original mobile setting) */
        @media (max-width: 767px) {
            .ms-ci {
                padding: 20px 14px;
            }

            .ms-ci-card {
                padding: 28px 20px;
                gap: 24px;
            }

            .ms-ci-item {
                flex-direction: column;
                align-items: center;
                gap: 10px;
                text-align: center;
            }

            .ms-ci-text {
                min-height: 0;
                justify-content: center;
            }

            .ms-ci-map {
                min-height: 320px;
            }
        }
    </style>

    <div class="ms-ci-wrap">
        <div class="ms-ci-card">
            <?php foreach ($contacts as $c) :
                $target = !empty($c['blank']) ? ' target="_blank" rel="noopener"' : '';
                ?>
                <div class="ms-ci-item">
                    <a class="ms-ci-icon" href="<?php echo $e($c['href']); ?>"<?php echo $target; ?> tabindex="-1" aria-label="<?php echo $e($c['label']); ?>">
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="<?php echo $e($icons[$c['icon']] ?? ''); ?>"></path></svg>
                    </a>
                    <div class="ms-ci-text">
                        <a href="<?php echo $e($c['href']); ?>"<?php echo $target; ?>><?php echo $e($c['text']); ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="ms-ci-map">
            <iframe src="<?php echo $e($map_src); ?>" title="<?php echo $e($business_name); ?>" aria-label="<?php echo $e($business_name); ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
        </div>
    </div>
</section>