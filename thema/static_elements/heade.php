

    <!-- [Favicon] icon -->
    <link rel="icon" href="./thema/assets/images/favicon.svg" type="image/x-icon" />

    <!-- map-vector css -->
    <link rel="stylesheet" href="./thema/assets/css/plugins/jsvectormap.min.css" />
    <!-- [Google Font : Public Sans] icon -->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <script src="
https://cdn.jsdelivr.net/npm/phosphor-icons@1.4.2/src/index.min.js
"></script>
    <link href="
https://cdn.jsdelivr.net/npm/phosphor-icons@1.4.2/src/css/icons.min.css
" rel="stylesheet">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

    <!-- [Feather Icons] https://feathericons.com -->
    <link href="
https://cdn.jsdelivr.net/npm/feather-icon@0.1.0/css/feather.min.css
" rel="stylesheet">

    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="./thema/assets/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="./thema/assets/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="./thema/assets/css/style-preset.css" />

    <script src="
https://cdn.jsdelivr.net/npm/@phosphor-icons/core@2.1.1/dist/index.umd.min.js
"></script>
    <style>
        .pc-submenu-popup{
            display: none !important;
        }
        .pc-sidebar .pc-micon i{
            font-size: 38px;
        }
        .pc-mtext{
            font-size: 18px;
            margin-top: 19px;
            display: inline-block;
        }
        .pc-sidebar .pc-navbar > .pc-item{
            margin: 0 10px;
            margin-bottom: 35px;
            border-bottom: 1px solid #e4e4e4;
        }

        .container {
            text-align: center;
            opacity: 0;
            transition: opacity 1s;
        }

        .question {
            margin-top: 20px;
            opacity: 0;
            transition: opacity 1s;
        }

        .show {
            opacity: 1;
        }

        button {
            background-color: #1e90ff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }

        button:hover {
            background-color: #4169e1;
        }
        #greeting{
            padding-top: 5px;
            font-size: 55px;
            padding-bottom: 30px;
        }
        /* Градиентная анимация фона */
        @keyframes gradient-animation {
            0% { background: linear-gradient(45deg, #ff5733, #ffc300); }
            50% { background: linear-gradient(45deg, #28a745, #007bff); }
            100% { background: linear-gradient(45deg, #ff5733, #ffc300); }
        }

        /* Анимация биения сердца */
        @keyframes heartbeat {
            0% { transform: scale(1); }
            25% { transform: scale(1.1); }
            50% { transform: scale(1); }
            75% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .animated-button {
            animation: gradient-animation 4s linear infinite, heartbeat 1s ease-in-out infinite;
            background: linear-gradient(45deg, #ff5733, #ffc300);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            transition: transform 0.3s ease;
            background-size: 200% 200%;
            font-weight: bold;
            text-transform: uppercase;
        }
        @keyframes gradient-animation {
            0% { background: linear-gradient(45deg, #ff5733, #ffc300); }
            50% { background: linear-gradient(45deg, #28a745, #007bff); }
            100% { background: linear-gradient(45deg, #ff5733, #ffc300); }
        }

        /* Анимация биения сердца */
        @keyframes heartbeat {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .animated-badge {
            animation: gradient-animation 4s linear infinite, heartbeat 1s ease-in-out infinite;
            background: linear-gradient(
                    45deg
                    , #ff5733, #ffc300);
            color: white !important;
            /* border-radius: 12px; */
            padding: 5px 10px;
            font-weight: bold;
            text-align: center;
            display: inline-block;
            background-size: 200% 200%;
        }
        input {
            padding: 10px;
            font-size: 16px;
            margin: 5px;
        }

        .message {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
        .message.show {
            opacity: 1;
        }
        .hint {
            margin-top: 20px;
            font-size: 14px;
            color: blue;
            cursor: pointer;
        }
        .blocK_title {
            font-size: 2.5em;
            font-weight: bold;
            background: linear-gradient(270deg, #FFB6C1, #FFD700, #98FB98, #87CEFA, #EE82EE);
            -webkit-background-clip: text;
            color: transparent;
            animation: titleAnimation 5s infinite;
            background-size: 400% 400%;
        }
        .text_content{
            color: white;
            font-size: 22px;
            text-align: center;
            margin-bottom: 30px;
        }
        @keyframes titleAnimation {
            0%, 100% {
                transform: scale(1);
                background-position: 0% 50%;
            }
            50% {
                transform: scale(1.2);
                background-position: 100% 50%;
            }
        }
        .animate {
            font-size: 1.2em;
            font-weight: bold;
            background: linear-gradient(270deg, #FFB6C1, #FFD700, #98FB98, #87CEFA, #EE82EE);
            -webkit-background-clip: text;
            color: transparent;
            animation: gradientShift 3s infinite;
            background-size: 400% 400%;
        }
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .report-container {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 50px auto;
        }

        .report-title {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .report-date {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        #countdown {
            font-size: 1.5em;
        }

        #timer {
            margin-top: 10px;
            font-size: 2em;
            color: #007bff;
            display: flex;
            justify-content: center;
            gap: 10px;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .animated-img {
            position: relative;
            top: -50px;
            opacity: 0;
            animation: moveDown 1s forwards;
        }

        @keyframes moveDown {
            to {
                top: 0;
                opacity: 1;
            }
        }

        @keyframes shine {
            from {
                filter: brightness(1);
            }
            to {
                filter: brightness(1.5);
            }
        }

        .shine-effect {
            animation: shine 1s forwards;
        }
    </style>