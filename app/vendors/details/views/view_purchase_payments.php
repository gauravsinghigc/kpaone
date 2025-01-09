<div class="row">
    <div class="col-md-12">
        <div class="flex-s-b">
            <form class="w-75">
                <input onchange="form.submit()" placeholder="Search Contracts..." oninput="SearchData('VendorContractSearch', 'VendorRecords')" type='search' id='VendorContractSearch' class='form-control'>
            </form>
            <div class="">
                <a href="#" onclick="Databar('ReceivePayments')" class="btn btn-md btn-danger">
                    <i class="fa fa-plus"></i>
                    Receive Payment
                </a>
            </div>
        </div>
    </div>
</div>
<?php include $Dir . "/include/forms/Add-Payment-Record.php"; ?>