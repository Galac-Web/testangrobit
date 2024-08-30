
    <?php foreach ($users as $user): ?>

        <tr data-id="<?php echo htmlspecialchars($user['id']); ?>">
            <td>
                <label class="checkboxs">
                    <input type="checkbox">
                    <span class="checkmarks"></span>
                </label>
            </td>
            <td class="productimgname">
                <a href="/desusers" class="product-img">
                    <img src="./thema/assets/img/customer/noimages.jpg" alt="product">
                </a>
                <a href="/desusers?id=<?php echo htmlspecialchars($user['randomn_id']); ?>"><?php echo htmlspecialchars($user['yourname']); ?></a>
            </td>
            <td><?php echo htmlspecialchars($user['role']); ?></td>
            <td><?php echo htmlspecialchars($user['phone']); ?> </td>
            <td><a href="#" class="__cf_email__" data-cfemail="17637f787a766457726f767a677b723974787a"><?php echo htmlspecialchars($user['email']); ?></a></td>
            <td>
                <p class="fs-12 fw-semibold mb-0 text-muted">500<span class="float-end fs-10 fw-normal">25%</span></p>
                <div class="progress" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" style="width: 20%"></div>
                </div></td>
            <td>
                <a class="me-3" href="editcustomer.html">
                    <img src="./thema/assets/img/icons/edit.svg" alt="img">
                </a>
                <a class="me-3 confirm-text" href="#">
                    <img src="./thema/assets/img/icons/delete.svg" alt="img">
                </a>
            </td>
        </tr>
    <?php endforeach; ?>

