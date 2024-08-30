<?php
session_start();
$_SESSION['add_product'] = rand(100, 10000);
?>
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/ecommerce">E-commerce</a></li>
                            <li class="breadcrumb-item" aria-current="page">Products</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Add New Product</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <form action="/runquery" method="post" class="row">
            <!-- [ sample-page ] start -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Product description</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Product Name">
                            <input type="text" name="type" value="productadd" hidden="hidden">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>

                            <input list="categories" name="category_id" class="form-select" id="category" placeholder="Choose a category">
                            <datalist id="categories">
                                <option value="Electronics">
                                <option value="Clothing">
                                <option value="Home & Kitchen">
                                <option value="Books">
                                <option value="Health & Beauty">
                                <option value="Sports & Outdoors">
                                <option value="Toys & Games">
                                <option value="Automotive">
                                <option value="Jewelry">
                                <option value="Office Supplies">
                                <option value="Garden & Outdoor">
                                <option value="Pets">
                                <option value="Baby Products">
                                <option value="Groceries">
                                <option value="Musical Instruments">
                                <option value="Arts & Crafts">
                                <option value="Furniture">
                                <option value="Appliances">
                                <option value="Tools & Home Improvement">
                                <option value="Video Games">
                                <option value="Movies & TV">
                            </datalist>

                        </div>
                        <div class="mb-3">

                            <label class="form-label">Brand</label>
                            <input type="text" class="form-control" name="brand_id" placeholder="Enter Product Name">

                        </div>
                        <div class="mb-0">
                            <label class="form-label">Product Description</label>
                            <textarea class="form-control" name="description" placeholder="Enter Product Description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Pricing</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label d-flex align-items-center">Price <i class="ph-duotone ph-info ms-1" data-bs-toggle="tooltip" data-bs-title="Price"></i></label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" name="price" placeholder="Price">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label d-flex align-items-center">Compare at price <i class="ph-duotone ph-info ms-1" data-bs-toggle="tooltip" data-bs-title="Compare at price"></i></label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" name="compare_at_price" placeholder="Compare at price">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-6">

                <div class="card">
                    <div class="card-header">
                        <h5>Select size</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-2">
                            <select class="form-select" name="size">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="60">60</option>
                                <option value="70">70</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Select Color</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-2">
                            <input type="color" class="form-control" name="color" placeholder="Compare at price">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Shipping and Delivery</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-0">
                            <label class="form-label">Items Weight</label>
                            <select class="form-select">
                                <option>12.00</option>
                                <option>Category 1</option>
                                <option>Category 2</option>
                                <option>Category 3</option>
                                <option>Category 4</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Product image</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-0">
                            <p><span class="text-danger">*</span> Recommended resolution is 640x640 with file size</p>
                            <a href="#" id="uploadButton" class="btn btn-outline-secondary">
                                <i class="ti ti-upload me-2"></i> Click to Upload
                            </a>
                            <input type="file" id="fluplddate" class="d-none">
                            <div id="returnImg" class="mt-5"></div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5>Status</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-2">
                            <div class="col-auto">
                                <input type="radio" class="btn-check" id="btnrdolite11" name="btn_radio12" checked="">
                                <label class="btn btn-sm btn-light-success" for="btnrdolite11">Active</label>
                            </div>
                            <div class="col-auto">
                                <input type="radio" class="btn-check" id="btnrdolite12" name="btn_radio12">
                                <label class="btn btn-sm btn-light-primary" for="btnrdolite12">Processing</label>
                            </div>
                            <div class="col-auto">
                                <input type="radio" class="btn-check" id="btnrdolite13" name="btn_radio12">
                                <label class="btn btn-sm btn-light-danger" for="btnrdolite13">Close</label>
                            </div>
                            <div class="col-auto">
                                <input type="radio" class="btn-check" id="btnrdolite14" name="btn_radio12">
                                <label class="btn btn-sm btn-light-warning" for="btnrdolite14">Pending</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body text-end btn-page">
                        <button type="submit" class="btn btn-primary mb-0">Save product</button>
                        <button class="btn btn-outline-secondary mb-0">Reset</button>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </form>

    </div>
</div>

<script>
    console.log('Script loaded'); // Убедитесь, что скрипт загружен

    document.addEventListener('DOMContentLoaded', function() {
        console.log('DOM fully loaded and parsed');

        const fileInput = document.getElementById('fluplddate');
        const uploadButton = document.getElementById('uploadButton');
        const returnImg = document.getElementById('returnImg');

        // Открытие диалогового окна выбора файла при клике на кнопку
        uploadButton.addEventListener('click', function() {
            console.log('Button clicked');
            fileInput.click();
        });

        // Обработка выбора файла
        fileInput.addEventListener('change', function(event) {
            console.log('File input changed');
            const file = event.target.files[0];

            if (file) {
                console.log('File selected:', file);

                const formData = new FormData();
                formData.append('file', file);
                formData.append('type', 'updattimages');

                fetch('/runquery', {
                    method: 'post',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        // Очистка предыдущих изображений
                        returnImg.innerHTML = '';

                        let returnImgSrc = data[0]['nameImg'];
                        // Добавление изображения и кнопки удаления
                        returnImg.insertAdjacentHTML("beforeend", `
                        <div class="image-container" style="position: relative; display: inline-block;">
                            <img class="m-r-10" src="./uploads/mini_${returnImgSrc}" alt="img" />
                            <a href="#" class="delete-button" data-img="${returnImgSrc}" style="position: absolute; top: 0; right: 0; background: red; color: white; border: none; padding: 5px;">Delete</a>
                        </div>
                    `);
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });

                // Сброс выбора файла
                fileInput.value = '';
            }
        });

        // Обработка клика по кнопке удаления
        returnImg.addEventListener('click', function(event) {
            if (event.target.classList.contains('delete-button')) {
                const imgName = event.target.getAttribute('data-img');

                fetch('/delete-image', {
                    method: 'post',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ imageName: imgName })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            console.log('Image deleted successfully');
                            // Удаление изображения и кнопки удаления из DOM
                            event.target.closest('.image-container').remove();
                        } else {
                            console.error('Failed to delete image');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        });
    });

</script>