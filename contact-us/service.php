<?php
// ---------------------------------------------------------------
// Services carousel: edit the cards here
// 'icon' must be one of the keys in $icons below
// ---------------------------------------------------------------
$services = [
    ['title' => 'Podcast Production',          'desc' => 'We record and edit podcasts for you',                  'icon' => 'podcast'],
    ['title' => 'Designing and Video Editing', 'desc' => 'We create stunning visuals and edit videos',          'icon' => 'design'],
    ['title' => 'SEO Services',                'desc' => 'We help your website rank higher in search results',   'icon' => 'growth'],
    ['title' => 'Social Media Management',     'desc' => 'We build and manage your social media presence',       'icon' => 'social'],
    ['title' => 'Paid Ads',                    'desc' => 'We create Google Ads and Meta Ads that convert',       'icon' => 'bullhorn'],
    ['title' => 'Website Development',         'desc' => 'We build fast, responsive, SEO-friendly websites.',    'icon' => 'podcast'],
    ['title' => 'Script Writing',              'desc' => 'We write compelling scripts for videos and ads',       'icon' => 'pen'],
    ['title' => 'Email Marketing',             'desc' => 'We help you convert leads, with email campaigns',      'icon' => 'laptop'],
];

// Icons copied from the original section (same shapes as your live site)
$icons = [
    'bullhorn' => [
        'viewBox' => '0 0 576 512',
        'paths'   => ['M576 240c0-23.63-12.95-44.04-32-55.12V32.01C544 23.26 537.02 0 512 0c-7.12 0-14.19 2.38-19.98 7.02l-85.03 68.03C364.28 109.19 310.66 128 256 128H64c-35.35 0-64 28.65-64 64v96c0 35.35 28.65 64 64 64h33.7c-1.39 10.48-2.18 21.14-2.18 32 0 39.77 9.26 77.35 25.56 110.94 5.19 10.69 16.52 17.06 28.4 17.06h74.28c26.05 0 41.69-29.84 25.9-50.56-16.4-21.52-26.15-48.36-26.15-77.44 0-11.11 1.62-21.79 4.41-32H256c54.66 0 108.28 18.81 150.98 52.95l85.03 68.03a32.023 32.023 0 0 0 19.98 7.02c24.92 0 32-22.78 32-32V295.13C563.05 284.04 576 263.63 576 240zm-96 141.42l-33.05-26.44C392.95 311.78 325.12 288 256 288v-96c69.12 0 136.95-23.78 190.95-66.98L480 98.58v282.84z'],
    ],
    'podcast' => [
        'viewBox' => '0 0 448 512',
        'paths'   => ['M267.429 488.563C262.286 507.573 242.858 512 224 512c-18.857 0-38.286-4.427-43.428-23.437C172.927 460.134 160 388.898 160 355.75c0-35.156 31.142-43.75 64-43.75s64 8.594 64 43.75c0 32.949-12.871 104.179-20.571 132.813zM156.867 288.554c-18.693-18.308-29.958-44.173-28.784-72.599 2.054-49.724 42.395-89.956 92.124-91.881C274.862 121.958 320 165.807 320 220c0 26.827-11.064 51.116-28.866 68.552-2.675 2.62-2.401 6.986.628 9.187 9.312 6.765 16.46 15.343 21.234 25.363 1.741 3.654 6.497 4.66 9.449 1.891 28.826-27.043 46.553-65.783 45.511-108.565-1.855-76.206-63.595-138.208-139.793-140.369C146.869 73.753 80 139.215 80 220c0 41.361 17.532 78.7 45.55 104.989 2.953 2.771 7.711 1.77 9.453-1.887 4.774-10.021 11.923-18.598 21.235-25.363 3.029-2.2 3.304-6.566.629-9.185zM224 0C100.204 0 0 100.185 0 224c0 89.992 52.602 165.647 125.739 201.408 4.333 2.118 9.267-1.544 8.535-6.31-2.382-15.512-4.342-30.946-5.406-44.339-.146-1.836-1.149-3.486-2.678-4.512-47.4-31.806-78.564-86.016-78.187-147.347.592-96.237 79.29-174.648 175.529-174.899C320.793 47.747 400 126.797 400 224c0 61.932-32.158 116.49-80.65 147.867-.999 14.037-3.069 30.588-5.624 47.23-.732 4.767 4.203 8.429 8.535 6.31C395.227 389.727 448 314.187 448 224 448 100.205 347.815 0 224 0zm0 160c-35.346 0-64 28.654-64 64s28.654 64 64 64 64-28.654 64-64-28.654-64-64-64z'],
    ],
    'pen' => [
        'viewBox' => '0 0 512 512',
        'paths'   => ['M79.18 282.94a32.005 32.005 0 0 0-20.24 20.24L0 480l4.69 4.69 92.89-92.89c-.66-2.56-1.57-5.03-1.57-7.8 0-17.67 14.33-32 32-32s32 14.33 32 32-14.33 32-32 32c-2.77 0-5.24-.91-7.8-1.57l-92.89 92.89L32 512l176.82-58.94a31.983 31.983 0 0 0 20.24-20.24l33.07-84.07-98.88-98.88-84.07 33.07zM369.25 28.32L186.14 227.81l97.85 97.85 199.49-183.11C568.4 67.48 443.73-55.94 369.25 28.32z'],
    ],
    'laptop' => [
        'viewBox' => '0 0 640 512',
        'paths'   => ['M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63l58.35 58.34zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63zM624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16zM576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512V48zm-64 272H128V64h384v256z'],
    ],
    'design' => [
        'viewBox' => '0 0 32 32',
        'paths'   => [
            'M21.061 2.578h-8.173c-0.251 0-0.503 0.189-0.503 0.503s0.189 0.503 0.503 0.503h8.173c0.251 0 0.503-0.189 0.503-0.503-0.063-0.314-0.251-0.503-0.503-0.503z',
            'M16.534 4.589h-3.646c-0.251 0-0.503 0.189-0.503 0.503 0 0.251 0.189 0.503 0.503 0.503h3.646c0.251-0.063 0.44-0.251 0.44-0.566 0-0.251-0.189-0.44-0.44-0.44z',
            'M29.674 4.652c-0.251 0-0.503 0.189-0.503 0.503 0 0.251 0.189 0.503 0.503 0.503 0.44 0 0.88 0.377 0.88 0.88v13.517h-3.458v-14.46h0.817c0.251 0 0.503-0.189 0.503-0.503 0-0.251-0.189-0.503-0.503-0.503h-0.817v-3.143c0-0.817-0.692-1.446-1.446-1.446h-19.929c-0.754 0-1.446 0.629-1.446 1.446v3.269h-2.515c-0.943-0.063-1.76 0.754-1.76 1.76v18.42c0 1.006 0.817 1.823 1.823 1.823h2.955c0.251 0 0.503-0.189 0.503-0.503s-0.189-0.503-0.503-0.503h-2.955c-0.44 0-0.88-0.377-0.88-0.88v-3.898h29.611v3.898c0 0.44-0.377 0.88-0.88 0.88h-22.695c-0.251 0-0.503 0.189-0.503 0.503 0 0.251 0.189 0.503 0.503 0.503h4.904v2.515c-1.257 0-2.326 1.069-2.326 2.326 0 0.251 0.189 0.503 0.503 0.503h11.505c0.251 0 0.503-0.189 0.503-0.503 0-1.257-1.069-2.326-2.326-2.326v-2.515h10.059c1.006 0 1.823-0.817 1.823-1.823v-18.42c-0.126-1.006-0.943-1.823-1.949-1.823zM4.275 19.992h-3.332v-13.517c0-0.44 0.377-0.88 0.88-0.88h2.515v14.397zM26.153 6.978h-16.22c-0.251 0-0.503 0.189-0.503 0.503s0.189 0.503 0.503 0.503h16.22v12.071h-20.872v-12.134h2.2c0.251 0 0.503-0.189 0.503-0.503s-0.189-0.503-0.503-0.503h-2.2v-5.47c0-0.251 0.189-0.503 0.503-0.503h19.929c0.251 0 0.503 0.189 0.503 0.503l-0.063 5.532zM12.825 26.656h5.91v2.515h-5.91v-2.515zM20.935 31.057h-10.373c0.189-0.566 0.692-0.943 1.32-0.943h7.733c0.629 0 1.132 0.377 1.32 0.943z',
            'M16.031 21.878c-0.817 0-1.446 0.629-1.446 1.446s0.629 1.446 1.446 1.446c0.817 0 1.446-0.629 1.446-1.446-0.063-0.817-0.692-1.446-1.446-1.446zM16.031 23.827c-0.251 0-0.503-0.189-0.503-0.503 0-0.251 0.189-0.503 0.503-0.503 0.251 0 0.503 0.189 0.503 0.503-0.063 0.251-0.251 0.503-0.503 0.503z',
            'M10.436 4.904l-1.572-2.703c-0.063-0.126-0.251-0.251-0.44-0.251s-0.251 0.126-0.377 0.251l-1.572 2.703c-0.063 0.126-0.063 0.314 0 0.503 0.126 0.126 0.251 0.251 0.44 0.251h3.143c0.189 0 0.314-0.063 0.44-0.251 0.063-0.126 0.063-0.314-0.063-0.503zM7.733 4.652l0.754-1.257 0.754 1.257h-1.509z',
            'M24.707 9.682h-6.916c-0.251 0-0.503 0.189-0.503 0.503 0 0.251 0.189 0.503 0.503 0.503h6.916c0.251 0 0.503-0.189 0.503-0.503s-0.251-0.503-0.503-0.503z',
            'M24.707 11.756h-6.916c-0.251 0-0.503 0.189-0.503 0.503s0.189 0.503 0.503 0.503h6.916c0.251 0 0.503-0.189 0.503-0.503s-0.251-0.503-0.503-0.503z',
            'M24.707 13.831h-6.916c-0.251 0-0.503 0.189-0.503 0.503 0 0.251 0.189 0.503 0.503 0.503h6.916c0.251 0 0.503-0.189 0.503-0.503 0-0.251-0.251-0.503-0.503-0.503z',
            'M24.707 15.906h-6.916c-0.251 0-0.503 0.189-0.503 0.503 0 0.251 0.189 0.503 0.503 0.503h6.916c0.251 0 0.503-0.189 0.503-0.503 0-0.251-0.251-0.503-0.503-0.503z',
            'M21.061 18.043h-3.206c-0.251 0-0.503 0.189-0.503 0.503s0.189 0.503 0.503 0.503h3.206c0.251 0 0.503-0.189 0.503-0.503-0.063-0.314-0.251-0.503-0.503-0.503z',
            'M15.654 9.242h-8.739c-0.251 0-0.503 0.189-0.503 0.503v8.739c0 0.251 0.189 0.503 0.503 0.503h8.802c0.251 0 0.503-0.189 0.503-0.503v-8.802c-0.063-0.189-0.251-0.44-0.566-0.44zM7.418 10.185h7.796v4.967c-0.063 0-0.126 0-0.189 0-0.817-0.063-1.32 0.251-1.697 0.503-0.314 0.189-0.566 0.377-0.943 0.377-0.692 0.063-1.132-0.314-1.635-0.754-0.629-0.503-1.32-1.069-2.389-1.006-0.314 0-0.629 0.063-0.943 0.251v-4.338zM15.214 18.043v0h-7.796v-2.452c0.314-0.189 0.692-0.314 1.006-0.314 0.754-0.063 1.194 0.314 1.76 0.817 0.629 0.503 1.257 1.069 2.326 0.943 0.692-0.063 1.069-0.314 1.446-0.566 0.314-0.251 0.566-0.377 1.069-0.314 0.063 0 0.189 0 0.251 0.063l-0.063 1.823z',
            'M12.574 11.253c-0.817 0-1.446 0.629-1.446 1.446s0.629 1.446 1.446 1.446c0.817 0 1.446-0.629 1.446-1.446 0-0.754-0.692-1.446-1.446-1.446zM12.574 13.265c-0.251 0-0.503-0.251-0.503-0.503s0.251-0.503 0.503-0.503c0.251 0 0.503 0.251 0.503 0.503s-0.251 0.503-0.503 0.503z',
        ],
    ],
    'growth' => [
        'viewBox' => '0 0 32 32',
        'paths'   => ['M16.631 15.219h-5.137c-0.387 0-0.65 0.325-0.65 0.65v15.187c0 0.394 0.325 0.65 0.65 0.65h5.137c0.325 0 0.65-0.262 0.65-0.65v-15.188c0-0.387-0.325-0.65-0.65-0.65zM15.981 30.406h-3.838v-13.881h3.838v13.881zM6.481 17.438h-5.138c-0.387 0-0.65 0.325-0.65 0.65v12.975c0 0.394 0.325 0.65 0.65 0.65h5.138c0.325 0 0.65-0.262 0.65-0.65v-12.975c0-0.394-0.325-0.65-0.65-0.65zM5.831 30.406h-3.837v-11.669h3.837v11.669zM31.2 10.262l-6.438-8.931c-0.262-0.325-0.781-0.325-1.038 0l-6.438 8.931c-0.262 0.369-0.163 0.975 0.519 0.975h3.188v19.819c0 0.394 0.325 0.65 0.65 0.65h5.137c0.325 0 0.65-0.262 0.712-0.65v-19.813h3.188c0.637 0 0.775-0.65 0.519-0.981zM26.775 9.938c-0.387 0-0.65 0.325-0.65 0.65v19.819h-3.9v-19.819c0-0.394-0.325-0.65-0.65-0.65h-2.6l5.2-7.169 5.2 7.169h-2.6z'],
    ],
    'social' => [
        'viewBox' => '0 0 30 32',
        'paths'   => [
            'M15.848 4.177v0c-0.305-0.425-0.878-0.517-1.294-0.222s-0.508 0.878-0.213 1.284l0.009 0.009c0.185 0.25 0.462 0.388 0.748 0.388 0.185 0 0.37-0.055 0.536-0.176 0.416-0.296 0.508-0.869 0.213-1.284z',
            'M26.733 20.542l-1.645-0.397v-0.296c1.072-0.748 1.765-1.987 1.765-3.391v-2.135c0-2.282-1.857-4.14-4.14-4.14-1.026 0-1.959 0.379-2.68 0.989-0.804-1.968-2.744-3.364-4.999-3.364-2.264 0-4.195 1.395-4.999 3.373-0.721-0.619-1.663-0.998-2.689-0.998-2.282 0-4.14 1.857-4.14 4.14v2.135c0 1.405 0.702 2.643 1.765 3.391v0.296l-1.645 0.397c-1.959 0.471-3.327 2.209-3.327 4.223v1.728c0 0.508 0.416 0.924 0.924 0.924h4.251c-0.009 0.111-0.009 0.222-0.009 0.342v3.327c0 0.508 0.416 0.924 0.924 0.924h5.554c0.508 0 0.924-0.416 0.924-0.924s-0.416-0.924-0.924-0.924h-0.952v-1.913c0-0.508-0.416-0.924-0.924-0.924s-0.924 0.416-0.924 0.924v1.913h-1.839v-2.403c0-1.783 1.21-3.317 2.948-3.733l2.532-0.61 1.7 3.863c0.148 0.333 0.48 0.554 0.85 0.554v0c0.37 0 0.702-0.213 0.85-0.554l1.691-3.853 2.532 0.601c1.737 0.416 2.948 1.95 2.948 3.733v2.393h-1.83v-1.913c0-0.508-0.416-0.924-0.924-0.924s-0.924 0.416-0.924 0.924v1.913h-1.044c-0.508 0-0.924 0.416-0.924 0.924s0.416 0.924 0.924 0.924h5.646c0.508 0 0.924-0.416 0.924-0.924v-3.317c0-0.111 0-0.231-0.009-0.342h4.26c0.508 0 0.924-0.416 0.924-0.924v-1.728c-0.018-2.014-1.386-3.752-3.345-4.223zM22.723 12.040c1.21 0 2.209 0.943 2.282 2.135h-1.284c-1.081 0-2.144-0.259-3.096-0.758 0.342-0.804 1.155-1.377 2.098-1.377zM20.431 16.337c0-0.046 0-0.092 0-0.139v-0.822c1.035 0.425 2.153 0.656 3.28 0.656h1.294v0.444c0 1.257-1.026 2.292-2.292 2.292s-2.292-1.026-2.292-2.292v-0.139zM11.486 13.223v0c0-1.959 1.589-3.548 3.548-3.548 1.765 0 3.234 1.294 3.502 2.985l-1.552-0.915c-0.388-0.231-0.887-0.139-1.174 0.203-0.758 0.906-1.876 1.423-3.059 1.423h-1.266v-0.148zM7.346 12.040c0.943 0 1.746 0.573 2.098 1.377-0.952 0.499-2.014 0.758-3.096 0.758h-1.284c0.074-1.183 1.072-2.135 2.282-2.135zM5.055 16.032h1.294c1.127 0 2.245-0.222 3.29-0.656v1.090c0 1.257-1.026 2.292-2.292 2.292s-2.292-1.026-2.292-2.292v-0.434zM9.518 22.224c-1.82 0.434-3.243 1.7-3.927 3.345h-3.742v-0.804c0-1.155 0.785-2.153 1.913-2.43l2.356-0.564c0.416-0.102 0.712-0.471 0.712-0.896v-0.314c0.166 0.018 0.342 0.037 0.517 0.037s0.342-0.009 0.517-0.037v0.268c0 0.009 0 0.028 0 0.037 0 0.305 0.148 0.601 0.425 0.776 0.102 0.065 0.213 0.111 0.333 0.129l1.377 0.333-0.48 0.12zM12.096 20.791c-0.24-0.102-0.48-0.185-0.739-0.25l-1.654-0.397v-0.286c0.296-0.213 0.564-0.453 0.804-0.73 0.416 0.638 0.952 1.183 1.589 1.589v0.074zM16.116 22.15l-1.081 2.458-1.081-2.467v-0.656c0.351 0.074 0.721 0.111 1.090 0.111s0.73-0.037 1.072-0.111v0.665zM15.034 19.747c-1.959 0-3.548-1.589-3.548-3.548v-0.979h1.266c1.469 0 2.855-0.545 3.927-1.515l1.904 1.118v1.506c-0.074 1.904-1.636 3.419-3.548 3.419zM17.964 20.8v-0.065c0.638-0.416 1.183-0.961 1.599-1.599 0.231 0.277 0.499 0.517 0.795 0.721v0.286l-1.654 0.397c-0.259 0.065-0.508 0.148-0.739 0.259zM28.211 25.569h-3.761c-0.684-1.636-2.107-2.911-3.927-3.345l-0.462-0.111 1.386-0.333c0.111-0.018 0.231-0.065 0.333-0.129 0.277-0.176 0.425-0.471 0.425-0.776 0-0.009 0-0.018 0-0.018v-0.286c0.166 0.018 0.342 0.037 0.517 0.037s0.351-0.009 0.517-0.037v0.314c0 0.425 0.296 0.804 0.712 0.896l2.356 0.564c1.127 0.268 1.913 1.266 1.913 2.43l-0.009 0.795z',
            'M15.681 20.874c-0.176-0.176-0.407-0.268-0.656-0.268-0.24 0-0.48 0.102-0.656 0.268-0.176 0.176-0.268 0.407-0.268 0.656 0 0.24 0.102 0.48 0.268 0.656 0.176 0.176 0.407 0.268 0.656 0.268 0.24 0 0.48-0.102 0.656-0.268 0.176-0.176 0.268-0.407 0.268-0.656 0-0.24-0.102-0.48-0.268-0.656z',
            'M15.118 0c-0.508 0-0.924 0.416-0.924 0.924v1.386c0 0.508 0.416 0.924 0.924 0.924s0.924-0.416 0.924-0.924v-1.386c0-0.508-0.416-0.924-0.924-0.924z',
            'M11.717 3.012l-0.97-0.97c-0.36-0.36-0.943-0.36-1.303 0s-0.36 0.943 0 1.303l0.97 0.97c0.185 0.185 0.416 0.268 0.656 0.268s0.471-0.092 0.656-0.268c0.351-0.351 0.351-0.943-0.009-1.303z',
            'M20.773 2.070c-0.36-0.36-0.943-0.36-1.303 0l-0.961 0.961c-0.36 0.36-0.36 0.943 0 1.303 0.185 0.185 0.416 0.268 0.656 0.268s0.471-0.092 0.656-0.268l0.961-0.961c0.351-0.36 0.351-0.943-0.009-1.303z',
        ],
    ],
];

$e = function ($s) { return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); };
$total = count($services);
?>
<section class="ms-svc" aria-roledescription="carousel" aria-label="Our services">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600;700&family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <style>
        .ms-svc,
        .ms-svc * {
            box-sizing: border-box;
        }

        .ms-svc {
            --purple: #5a2ea6;
            width: 100%;
            padding: 20px 20px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-svc-wrap {
            max-width: 1240px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .ms-svc-viewport {
            flex: 1 1 auto;
            min-width: 0;
            overflow: hidden;
        }

        .ms-svc-track {
            --pv: 4;
            --gap: 10px;
            --i: 0;
            --speed: .5s;
            display: flex;
            transform: translate3d(calc((var(--i) * -1) * (100% + var(--gap)) / var(--pv)), 0, 0);
            transition: transform var(--speed) ease;
            will-change: transform;
        }

        .ms-svc-track.is-instant {
            transition: none;
        }

        .ms-svc-slide {
            flex: 0 0 calc((100% - (var(--pv) - 1) * var(--gap)) / var(--pv));
            margin-right: var(--gap);
            display: flex;
        }

        .ms-svc-card {
            width: 100%;
            padding: 20px 16px 24px;
            border: 1px solid #ececec;
            border-radius: 18px;
            background: #f6f6f6;
            text-align: center;
        }

        .ms-svc-icon {
            width: 50px;
            height: 50px;
            margin: 0 auto 10px;
            border-radius: 50%;
            background: #ddd3ee;
            color: var(--purple);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ms-svc-icon svg {
            width: 24px;
            height: 24px;
            fill: currentColor;
        }

        .ms-svc-title {
            margin: 0 0 4px;
            font-family: 'Inter', Arial, sans-serif;
            font-size: 18px;
            font-weight: 600;
            line-height: 1.3;
            color: #000;
        }

        .ms-svc-desc {
            margin: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.65;
            color: #222;
        }

        .ms-svc-arrow {
            position: relative;
            flex: 0 0 30px;
            /* width: 30px;
            height: 30px; */
            padding: 0;
            border: 2px solid var(--purple);
            border-radius: 50%;
            background: transparent;
            color: var(--purple);
            display: grid;
            place-items: center;
            cursor: pointer;
        }

        .ms-svc-arrow svg {
            width: 34px;
            height: 34px;
            fill: currentColor;
            overflow: visible;
            pointer-events: none;
        }

        .ms-svc-arrow:focus-visible {
            outline: 3px solid rgba(90, 46, 166, .35);
            outline-offset: 2px;
        }

        @media (max-width: 767px) {
            .ms-svc {
                padding: 16px 10px;
            }

            .ms-svc-wrap {
                gap: 6px;
            }

            .ms-svc-arrow {
                flex-basis: 26px;
                width: 26px;
                height: 26px;
            }

            .ms-svc-arrow svg {
                width: 30px;
                height: 30px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .ms-svc-track {
                transition: none;
            }
        }
    </style>

    <div class="ms-svc-wrap">
        <button type="button" class="ms-svc-arrow ms-svc-prev" aria-label="Previous slide">
            <svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M646 125C629 125 613 133 604 142L308 442C296 454 292 471 292 487 292 504 296 521 308 533L604 854C617 867 629 875 646 875 663 875 679 871 692 858 704 846 713 829 713 812 713 796 708 779 692 767L438 487 692 225C700 217 708 204 708 187 708 171 704 154 692 142 675 129 663 125 646 125Z"></path></svg>
        </button>

        <div class="ms-svc-viewport">
            <div class="ms-svc-track" aria-live="off">
                <?php foreach ($services as $n => $service) :
                    $icon = $icons[$service['icon']] ?? null;
                    ?>
                    <div class="ms-svc-slide" role="group" aria-roledescription="slide" aria-label="<?php echo ($n + 1) . ' / ' . $total; ?>">
                        <div class="ms-svc-card">
                            <?php if ($icon) : ?>
                                <div class="ms-svc-icon">
                                    <svg viewBox="<?php echo $e($icon['viewBox']); ?>" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><?php foreach ($icon['paths'] as $d) : ?><path d="<?php echo $e($d); ?>"></path><?php endforeach; ?></svg>
                                </div>
                            <?php endif; ?>
                            <h3 class="ms-svc-title"><?php echo $e($service['title']); ?></h3>
                            <p class="ms-svc-desc"><?php echo $e($service['desc']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <button type="button" class="ms-svc-arrow ms-svc-next" aria-label="Next slide">
            <svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M696 533C708 521 713 504 713 487 713 471 708 454 696 446L400 146C388 133 375 125 354 125 338 125 325 129 313 142 300 154 292 171 292 187 292 204 296 221 308 233L563 492 304 771C292 783 288 800 288 817 288 833 296 850 308 863 321 871 338 875 354 875 371 875 388 867 400 854L696 533Z"></path></svg>
        </button>
    </div>

    <script>
        (function() {
            var GAP = 10;          // px between cards
            var SPEED = 500;       // ms, slide animation
            var DELAY = 3000;      // ms, autoplay delay

            function init(root) {
                var viewport = root.querySelector('.ms-svc-viewport');
                var track = root.querySelector('.ms-svc-track');
                var prevBtn = root.querySelector('.ms-svc-prev');
                var nextBtn = root.querySelector('.ms-svc-next');
                var originals = Array.prototype.slice.call(track.children);
                var total = originals.length;
                var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

                var pv = 4, index = 0, animating = false, timer = null, paused = false, resizeT = null;

                track.style.setProperty('--gap', GAP + 'px');
                track.style.setProperty('--speed', SPEED + 'ms');

                function perView() {
                    var w = window.innerWidth;
                    return Math.min(w <= 767 ? 1 : (w <= 1024 ? 3 : 4), total);
                }

                function setIndex(i, instant) {
                    index = i;
                    if (instant) track.classList.add('is-instant');
                    track.style.setProperty('--i', index);
                    if (instant) {
                        void track.offsetWidth; // flush so the jump has no animation
                        track.classList.remove('is-instant');
                    }
                }

                function build() {
                    Array.prototype.slice.call(track.querySelectorAll('.is-clone')).forEach(function(n) {
                        track.removeChild(n);
                    });
                    pv = perView();
                    track.style.setProperty('--pv', pv);

                    var before = document.createDocumentFragment();
                    var after = document.createDocumentFragment();
                    var i, c;
                    for (i = total - pv; i < total; i++) {
                        c = originals[i].cloneNode(true);
                        c.classList.add('is-clone');
                        c.setAttribute('aria-hidden', 'true');
                        before.appendChild(c);
                    }
                    for (i = 0; i < pv; i++) {
                        c = originals[i].cloneNode(true);
                        c.classList.add('is-clone');
                        c.setAttribute('aria-hidden', 'true');
                        after.appendChild(c);
                    }
                    track.insertBefore(before, track.firstChild);
                    track.appendChild(after);
                    animating = false;
                    setIndex(pv, true);
                }

                function go(dir) {
                    if (animating) return;
                    animating = true;
                    setIndex(index + dir, false);
                    setTimeout(function() {
                        animating = false;
                        if (index >= total + pv) setIndex(index - total, true);
                        else if (index < pv) setIndex(index + total, true);
                    }, SPEED + 30);
                }

                function stop() {
                    if (timer) { clearInterval(timer); timer = null; }
                }

                function start() {
                    stop();
                    if (reduce) return;
                    timer = setInterval(function() {
                        if (!paused && !document.hidden) go(1);
                    }, DELAY);
                }

                prevBtn.addEventListener('click', function() { go(-1); start(); });
                nextBtn.addEventListener('click', function() { go(1); start(); });

                // pause on hover / keyboard focus
                root.addEventListener('mouseenter', function() { paused = true; });
                root.addEventListener('mouseleave', function() { paused = false; });
                root.addEventListener('focusin', function() { paused = true; });
                root.addEventListener('focusout', function() { paused = false; });

                // touch swipe
                var startX = null;
                viewport.addEventListener('touchstart', function(e) {
                    startX = e.touches[0].clientX;
                }, { passive: true });
                viewport.addEventListener('touchend', function(e) {
                    if (startX === null) return;
                    var dx = e.changedTouches[0].clientX - startX;
                    startX = null;
                    if (Math.abs(dx) > 40) { go(dx < 0 ? 1 : -1); start(); }
                }, { passive: true });

                // rebuild when the number of visible cards changes
                window.addEventListener('resize', function() {
                    clearTimeout(resizeT);
                    resizeT = setTimeout(function() {
                        if (perView() !== pv) build();
                    }, 150);
                });

                build();
                start();
            }

            Array.prototype.forEach.call(document.querySelectorAll('.ms-svc'), init);
        })();
    </script>
</section>