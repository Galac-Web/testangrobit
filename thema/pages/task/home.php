<div class="pc-container" style="background-image: url('846.jpg');background-repeat: no-repeat;height: 100vh;background-size: cover;background-position: center;">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">

                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0 ">All Task</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="modal fade modal-animate" id="animateModal" tabindex="-1" aria-hidden="true" >
            <div class="modal-dialog">
                <div class="modal-content" style="background-image: url('planer.gif');background-position: center;">
                    <div class="modal-header">
                        <h5 class="modal-title" style="color: white;">Угадай число</h5>
                        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close" style="color: white;"> </button>
                    </div>
                    <div class="modal-body" >
                        <h3 style="color: white;">Введите два числа от <span class="animate">1</span> до <span class="animate">100</span>:</p>
                        </h3>
                        <div class="row">
                            <div class="col-lg-6"><input type="number" id="userInput1" min="1" max="100" placeholder="Число 1" style="
    width: 100%;
    border-radius: 5px;
    border: 1px solid #ccc;
"></div>
                            <div class="col-lg-6"> <input type="number" id="userInput2" min="1" max="100" placeholder="Число 2" style="
    width: 100%;
    border-radius: 5px;
    border: 1px solid #ccc;
"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6"><div class="message" id="message"></div></div>
                            <div class="col-lg-6"> <div class="hint" style="text-align: right;color: white;"  onclick="showHint()">Нужна подсказка?</div></div>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" style="
    border: 1px solid white;
    color: white;
">Close</button>
                        <button type="button" class="btn btn-primary shadow-2 btn_start" onclick="checkNumbers()">Проверить</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- [ Row 1 ] start -->


            <div class="col-md-12 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-body bg-light-primary">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <p class="text-muted mb-1">Нужно Сделать то что не было сделоно</p>
                                <div class="d-flex align-items-center mb-1">
                                    <h4 class="mb-0">100 Tokeni</h4>

                                </div>
                                <button data-pc-animate="blur" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#animateModal">
                                    Выпонить Задания
                                </button>

                            </div>
                            <div class="col-6">
                                <img src="./thema/assets/images/widget/img-visitor.png" alt="img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-body bg-light-primary">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <p class="text-muted mb-1">Нужно Сделать то что не было сделоно</p>
                                <div class="d-flex align-items-center mb-1">
                                    <h4 class="mb-0">100 Tokeni</h4>

                                </div>

                                <button type="button" class="btn btn-outline-primary" style="
    margin: 14px 0px !important;
">Выпонить Задания</button>
                            </div>
                            <div class="col-6">
                                <img src="./thema/assets/images/widget/img-visitor.png" alt="img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- [ Row 4 ] start -->
        </div>


        <div class="row">

            <div class="col-md-12" style="
    margin-bottom: 23px;
    margin-top: 38px;
">
                <div class="page-header-title">
                    <h2 class="mb-0">Gold Task</h2>
                </div>
            </div>


            <div class="col-md-12 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-body bg-light-primary" style="background: #f4c22bb0;">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <p class="text-muted mb-1">Нужно Сделать то что не было сделоно</p>
                                <div class="d-flex align-items-center mb-1">
                                    <h4 class="mb-0">100 Tokeni</h4>

                                </div>

                                <button type="button" class="btn btn-outline-primary" style="
    margin: 14px 0px !important;
">Выпонить Задания</button>
                            </div>
                            <div class="col-6">
                                <img src="./thema/assets/images/widget/img-visitor.png" alt="img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-body bg-light-primary" style="background: #f4c22bb0;">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <p class="text-muted mb-1">Нужно Сделать то что не было сделоно</p>
                                <div class="d-flex align-items-center mb-1">
                                    <h4 class="mb-0">100 Tokeni</h4>

                                </div>

                                <button type="button" class="btn btn-outline-primary" style="
    margin: 14px 0px !important;
">Выпонить Задания</button>
                            </div>
                            <div class="col-6">
                                <img src="./thema/assets/images/widget/img-visitor.png" alt="img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-body bg-light-primary" style="background: #f4c22bb0;">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <p class="text-muted mb-1">Нужно Сделать то что не было сделоно</p>
                                <div class="d-flex align-items-center mb-1">
                                    <h4 class="mb-0">100 Tokeni</h4>

                                </div>

                                <button type="button" class="btn btn-outline-primary" style="
    margin: 14px 0px !important;
">Выпонить Задания</button>
                            </div>
                            <div class="col-6">
                                <img src="./thema/assets/images/widget/img-visitor.png" alt="img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- [ Row 4 ] start -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>

<script>
    const targetNumber = Math.floor(Math.random() * 100) + 1;

    function checkNumbers() {
        const userInput1 = parseInt(document.getElementById('userInput1').value);
        const userInput2 = parseInt(document.getElementById('userInput2').value);
        const userAverage = Math.round((userInput1 + userInput2) / 2);
        const messageElement = document.getElementById('message');
        const difference = Math.abs(targetNumber - userAverage);

        if (difference === 0) {
            showMessage("Всё верно, Вы получили монеду 💵!", '#00ff16');
        } else if (difference <= 10) {

            showMessage('Близко, но нет. Попробуйте ещё раз.', '#6eeee2');
        } else {


            showMessage('Всё плохо. Попробуйте снова.', 'red');
        }
        document.querySelector('.btn_start').remove();

    }

    function showMessage(text, color) {
        const messageElement = document.getElementById('message');
        messageElement.textContent = text;
        messageElement.style.color = color;
        messageElement.classList.add('show');

        setTimeout(() => {
            messageElement.classList.remove('show');
        }, 2000);
    }

    function showHint() {
        alert(`Загаданное число больше ${targetNumber - 10} и меньше ${targetNumber + 10}.`);
    }
</script>
