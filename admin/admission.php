<?php
session_start();
include '../includes/connection.php';




?>

<div class=" p-4">
<div class=" row">
<div class=" col-6">
<h3>Courses</h3>
</div>

<div class="text-right col-6">
<button class=" btn btn-sm btn-dark">Upload</button>
</div>
</div>
<hr>

<table class=" table">
    <thead>
        <tr>
            <th>
                id
            </th>
            <th>
                Name
            </th>
            <th>
                Image
            </th>
            <th>

            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                1
            </td>
            <td>
                GRE
            </td>
            <td>
                gre.jpg
            </td>
            <td>
                <button class="btn btn-dark btn-sm">Action</button>
            </td>
        </tr>
    </tbody>
</table>

</div>