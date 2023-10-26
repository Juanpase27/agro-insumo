
<div id="template-bg-1">
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center" style="background: #dfdcd9">
        <div class="card p-4 text-light mb-5 mt-5" style="width: 25%">
            <div class="card-header d-flex">
                <div style="width: 10%">
                    {{ $logo }}
                </div>
                <div style="margin-left: 18%; color: #61a851">
                    {{ $title }}
                </div>
            </div>
            <div class="card-body w-100">
                {{ $slot }}
                <?php if(!empty($loginResult)){?>
                <div class="text-danger"><?php echo $loginResult; ?></div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
