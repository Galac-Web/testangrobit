<?php
require_once './app/Controllers/resapi/resapi.php';

?>
<section class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page">Fetch API</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Fetch API</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->


        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- prettier-ignore -->
            <div class="col-md-10 col-xxl-9 mb-4">

                <div>
                    <a class="btn btn-sm btn-light-dark rounded-pill px-2" role="button" target="_blank" href="https://github.com/fiduswriter/simple-datatables">
                        <i class="ti ti-external-link me-1"></i>
                        Reference
                    </a>
                </div>
            </div>

        </div>
        <div class="row">
            <!-- [ basic-table ] start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Fetch API E-commerce</h5>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>

                                        <th>name</th>
                                        <th>descriere</th>
                                        <th>query</th>
                                        <th>Corpul Cereri</th>
                                        <th>return_exemple</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                        <td><b>Obținerea listei tuturor produselor</b></td>
                                        <td>Returnează lista tuturor produselor</td>
                                        <td>GET /api/products</td>
                                        <td></td>
                                        <td><pre>
                                            [{"id": 1,
                                            "name": "Laptop",
                                            "price": 999.99,
                                            "description": "Un laptop de înaltă performanță",
                                            "category": "Electronice",
                                            "stock": 50 },
                                            { "id": 2,
                                            "name": "Smartphone",
                                            "price": 599.99,
                                            "description": "Ultimul model de smartphone",
                                            "category": "Electronice",
                                            "stock": 120 } ]
                                        </pre>
                                        </td>

                                    </tr>
                                    <tr>

                                        <td><b>Crearea unui nou produs</b></td>
                                        <td>Creează un nou produs.</td>
                                        <td>POST /api/products</td>
                                        <td></td>
                                        <td><pre>
                                                {
                                                "name": "Tabletă",
                                                "price": 299.99,
                                                "description": "Tabletă ușoară cu rezoluție înaltă",
                                                "category": "Electronice",
                                                "stock": 80
                                                }
                                                <pre>
                                        </td>

                                    </tr>
                                    <tr>

                                        <td><b>Actualizarea informațiilor despre un produs</b></td>
                                        <td>Actualizează informațiile despre un produs după ID-ul său.</td>
                                        <td>post /api/products/1</td>
                                        <td>
                                            <pre>
                                                {
                                                "name": "Laptop pentru gaming",
                                                "price": 1099.99,
                                                "description": "Laptop de înaltă performanță pentru gaming",
                                                "category":"Electronice",
                                                "stock": 30
                                                }
                                            </pre>
                                        </td>
                                        <td>
                                            <pre>
                                                {
                                                "id": 1,
                                                "name": "Laptop pentru gaming",
                                                "price": 1099.99,
                                                "description": "Laptop de înaltă performanță pentru gaming",
                                                "category": "Electronice",
                                                "stock": 30
                                                }
                                            </pre>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td><b>Crearea unei comenzi</b></td>
                                        <td>Creează o nouă comandă.</td>
                                        <td>post /api/orders</td>
                                        <td>
                                            <pre>{
                                                "user_id": 1,
                                                "products": [
                                                { "product_id": 1, "quantity": 2 },
                                                { "product_id": 2, "quantity": 1 }],
                                                "total_price": 1599.97,
                                                "status": "pending"
                                                }
                                            </pre>
                                        </td>
                                        <td>
                                            <pre>{
                                                "id": 1,"user_id":
                                                1,"products": [{ "product_id": 1, "quantity": 2 },
                                                { "product_id": 2, "quantity": 1 }],
                                                "total_price": 1599.97,
                                                "status": "pending",
                                                "created_at": "2024-08-30T12:34:56Z"}</pre>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td><b>Actualizarea stării unei comenzi</b></td>
                                        <td>Actualizează starea unei comenzi după ID-ul său.</td>
                                        <td>post /api/orders/1</td>
                                        <td>
                                            <pre>
                                                {
                                                "status": "shipped"
                                                }
                                            </pre>
                                        </td>
                                        <td>
                                            <pre>
                                                {
                                                "id": 1,"user_id": 1,
                                                "products":[{ "product_id": 1, "quantity": 2 },
                                                { "product_id": 2, "quantity": 1 }],
                                                "total_price": 1599.97,
                                                "status": "shipped",
                                                "created_at": "2024-08-30T12:34:56Z"
                                                }

                                            </pre>
                                        </td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Fetch API App Mobile</h5>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <table class="table">
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ basic-table ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>