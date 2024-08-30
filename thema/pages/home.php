<div class="pc-container bg_home"  >
    <div class="pc-content">
        <div class="row">
            <div class="col-lg-12 " style="margin-top: 60px;background-image: url(175_animation.gif);background-size: cover;" >
                <div class="bloc_whait">
                    <h2 class="cl-white text_header mb-5">Добро Пожаловать</h2>
                    <p class="color_text mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque iste natus nihil obcaecati, officia quae ratione vel. Accusamus architecto dolorum, enim esse facilis fugit hic ipsa non recusandae? Sapiente, tempore?</p>
                <button>Зауск проекта</button>
                </div>

            </div>
        </div>
    </div>
</div>


<script>

        window.onload = function() {
        document.querySelector('.container').classList.add('show');
        setTimeout(() => {
        document.getElementById('question1').classList.add('show');
    }, 1000);
    };

        function handleYes1() {
        document.getElementById('question1').classList.remove('show');
        setTimeout(() => {
        document.getElementById('question1').style.display = 'none';
        document.getElementById('question2').classList.add('show');
    }, 1000);
    }

        function handleNo1() {
        alert("Платформа предлагает уникальные возможности с различными пакетами.");
        handleYes1();
    }

        function handleYes2() {
        document.getElementById('question2').classList.remove('show');
        setTimeout(() => {
        document.getElementById('question2').style.display = 'none';
        document.getElementById('question3').classList.add('show');
    }, 1000);
    }

        function handleNo2() {
        alert("Оплата криптовалютой делает процесс ещё удобнее и безопаснее.");
        handleYes2();
    }

        function handleYes3() {
        document.getElementById('question3').classList.remove('show');
        setTimeout(() => {
        document.getElementById('question3').style.display = 'none';
        document.getElementById('question4').classList.add('show');
    }, 1000);
    }

        function handleNo3() {
        alert("Интернет-магазин предлагает товары и услуги полностью на криптовалюте.");
        handleYes3();
    }

        function handleYes4() {
        document.getElementById('question4').classList.remove('show');
        setTimeout(() => {
        document.getElementById('question4').style.display = 'none';
        document.getElementById('question5').classList.add('show');
    }, 1000);
    }

        function handleNo4() {
        alert("Токены повышают ваши шансы выиграть и делают игру ещё интереснее.");
        handleYes4();
    }

        function handleYes5() {
        alert("Поздравляем! Вы готовы стать участником уникальной крипто-лотереи.");
    }

        function handleNo5() {
        alert("Вы упускаете шанс выиграть до 15 000 евро.");
    }

</script>