<?php
require_once './app/Controllers/Tikets.php';


?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header" style="
    flex-direction: column;
">
           <h3 style="font-size: 80px;">Выигрывайте каждую неделю с нами!

           </h3>
            <span style="
    font-size: 18px;
    margin-bottom: 24px;
    color: #212529;
">До запуска лотереи</span>
            <div class="timer-container" >

                <div id="countdown">
                    <div class="time-box">
                        <span id="days">0</span>
                        <p>Days</p>
                    </div>
                    <div class="time-box">
                        <span id="hours">0</span>
                        <p>Hours</p>
                    </div>
                    <div class="time-box">
                        <span id="minutes">0</span>
                        <p>Minutes</p>
                    </div>
                    <div class="time-box">
                        <span id="seconds">0</span>
                        <p>Seconds</p>
                    </div>
                </div>
            </div>
            <p style="
    text-align: center;
    font-size: 25px;
    letter-spacing: 6px;
    font-family: auto;
">Каждое воскресенье мы проводим розыгрыш крупных призов, и вы можете стать одним из наших счастливых победителей. Купите билеты за USDT прямо сейчас и дайте себе шанс на выигрыш. Чем больше билетов, тем выше ваши шансы стать обладателем желанных призов. Присоединяйтесь к нашим участникам и начните выигрывать!</p>
        </div>

        <div class="row row-cols-12" style="
    margin: 0 auto;
    justify-content: center;
">
<?
$tikests = new Tikets();
$tikests->index();
?>

        </div>
    </div>
</div>
<script>
    const countdown = () => {
        const targetDate = new Date('2024-08-18T00:00:00').getTime();
        const now = new Date().getTime();
        const difference = targetDate - now;

        const days = Math.floor(difference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((difference % (1000 * 60)) / 1000);

        document.getElementById('days').textContent = days;
        document.getElementById('hours').textContent = hours;
        document.getElementById('minutes').textContent = minutes;
        document.getElementById('seconds').textContent = seconds;

        if (difference < 0) {
            document.getElementById('countdown').innerHTML = '<h2>Event has passed!</h2>';
        }
    };

    setInterval(countdown, 1000);
</script>
