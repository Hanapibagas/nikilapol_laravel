

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Tabs_&_Accordions'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> UI Elements <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Tabs & Accordions <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>



<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Default Tabs</h4>
                <p class="card-title-desc">Use the tab JavaScript plugin—include
                    it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code>
                    file—to extend our navigational tabs and pills to create tabbable panes
                    of local content, even via dropdown menus.</p>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                            <span class="d-none d-sm-block">Messages</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                            <span class="d-none d-sm-block">Settings</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <p class="mb-0">
                            Raw denim you probably haven't heard of them jean shorts Austin.
                            Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                            cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                            butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                            qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                            iphone. Seitan aliquip quis cardigan american apparel, butcher
                            voluptate nisi qui.
                        </p>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <p class="mb-0">
                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                            single-origin coffee squid. Exercitation +1 labore velit, blog
                            sartorial PBR leggings next level wes anderson artisan four loko
                            farm-to-table craft beer twee. Qui photo booth letterpress,
                            commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                            vinyl cillum PBR. Homo nostrud organic, assumenda labore
                            aesthetic magna delectus.
                        </p>
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel">
                        <p class="mb-0">
                            Etsy mixtape wayfarers, ethical wes anderson tofu before they
                            sold out mcsweeney's organic lomo retro fanny pack lo-fi
                            farm-to-table readymade. Messenger bag gentrify pitchfork
                            tattooed craft beer, iphone skateboard locavore carles etsy
                            salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                            Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                            mi whatever gluten yr.
                        </p>
                    </div>
                    <div class="tab-pane" id="settings" role="tabpanel">
                        <p class="mb-0">
                            Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                            art party before they sold out master cleanse gluten-free squid
                            scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                            art party locavore wolf cliche high life echo park Austin. Cred
                            vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                            farm-to-table VHS.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Justify Tabs</h4>
                <p class="card-title-desc">Use the tab JavaScript plugin—include
                    it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code>
                    file—to extend our navigational tabs and pills to create tabbable panes
                    of local content, even via dropdown menus.</p>

                <!-- Nav tabs -->
                <ul class="nav nav-pills nav-justified" role="tablist">
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home-1" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Home</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-bs-toggle="tab" href="#messages-1" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                            <span class="d-none d-sm-block">Messages</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-bs-toggle="tab" href="#settings-1" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                            <span class="d-none d-sm-block">Settings</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home-1" role="tabpanel">
                        <p class="mb-0">
                            Raw denim you probably haven't heard of them jean shorts Austin.
                            Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                            cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                            butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                            qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                            iphone. Seitan aliquip quis cardigan american apparel, butcher
                            voluptate nisi qui.
                        </p>
                    </div>
                    <div class="tab-pane" id="profile-1" role="tabpanel">
                        <p class="mb-0">
                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                            single-origin coffee squid. Exercitation +1 labore velit, blog
                            sartorial PBR leggings next level wes anderson artisan four loko
                            farm-to-table craft beer twee. Qui photo booth letterpress,
                            commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                            vinyl cillum PBR. Homo nostrud organic, assumenda labore
                            aesthetic magna 8-bit.
                        </p>
                    </div>
                    <div class="tab-pane" id="messages-1" role="tabpanel">
                        <p class="mb-0">
                            Etsy mixtape wayfarers, ethical wes anderson tofu before they
                            sold out mcsweeney's organic lomo retro fanny pack lo-fi
                            farm-to-table readymade. Messenger bag gentrify pitchfork
                            tattooed craft beer, iphone skateboard locavore carles etsy
                            salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                            Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                            mi whatever gluten-free.
                        </p>
                    </div>
                    <div class="tab-pane" id="settings-1" role="tabpanel">
                        <p class="mb-0">
                            Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                            art party before they sold out master cleanse gluten-free squid
                            scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                            art party locavore wolf cliche high life echo park Austin. Cred
                            vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                            farm-to-table.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="row">

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Vertical Nav Tabs</h4>
                <p class="card-title-desc">Example of Vertical nav tabs</p>

                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link mb-2 active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                            <a class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                            <a class="nav-link mb-2" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <p>
                                    Raw denim you probably haven't heard of them jean shorts Austin.
                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                    cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                    butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                    qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                    iphone. Seitan aliquip quis cardigan.
                                </p>
                                <p>Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                    qui irure terry richardson ex squid.</p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <p>
                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                    single-origin coffee squid. Exercitation +1 labore velit, blog
                                    sartorial PBR leggings next level wes anderson artisan four loko
                                    farm-to-table craft beer twee. Qui photo booth letterpress,
                                    commodo enim craft beer mlkshk.
                                </p>
                                <p class="mb-0"> Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna 8-bit</p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <p>
                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                    sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                    farm-to-table readymade. Messenger bag gentrify pitchfork
                                    tattooed craft beer, iphone skateboard locavore carles etsy
                                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                    Leggings gentrify squid 8-bit cred.
                                </p>
                                <p class="mb-0">DIY synth PBR banksy irony.
                                    Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                    mi whatever gluten-free.</p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <p>
                                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                    art party before they sold out master cleanse gluten-free squid
                                    scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                    art party locavore wolf cliche high life echo park Austin. Cred
                                    vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                    farm-to-table.
                                </p>
                                <p class="mb-0">Fanny pack portland seitan DIY,
                                    art party locavore wolf cliche high life echo park Austin. Cred
                                    vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                    farm-to-table.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Custom Tabs</h4>
                <p class="card-title-desc">Example of custom tabs</p>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                            <span class="d-none d-sm-block">Messages</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#settings1" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                            <span class="d-none d-sm-block">Settings</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home1" role="tabpanel">
                        <p class="mb-0">
                            Raw denim you probably haven't heard of them jean shorts Austin.
                            Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                            cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                            butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                            qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                            iphone. Seitan aliquip quis cardigan american apparel, butcher
                            voluptate nisi qui.
                        </p>
                    </div>
                    <div class="tab-pane" id="profile1" role="tabpanel">
                        <p class="mb-0">
                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                            single-origin coffee squid. Exercitation +1 labore velit, blog
                            sartorial PBR leggings next level wes anderson artisan four loko
                            farm-to-table craft beer twee. Qui photo booth letterpress,
                            commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                            vinyl cillum PBR. Homo nostrud organic, assumenda labore
                            aesthetic magna delectus.
                        </p>
                    </div>
                    <div class="tab-pane" id="messages1" role="tabpanel">
                        <p class="mb-0">
                            Etsy mixtape wayfarers, ethical wes anderson tofu before they
                            sold out mcsweeney's organic lomo retro fanny pack lo-fi
                            farm-to-table readymade. Messenger bag gentrify pitchfork
                            tattooed craft beer, iphone skateboard locavore carles etsy
                            salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                            Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                            mi whatever gluten-free carles.
                        </p>
                    </div>
                    <div class="tab-pane" id="settings1" role="tabpanel">
                        <p class="mb-0">
                            Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                            art party before they sold out master cleanse gluten-free squid
                            scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                            art party locavore wolf cliche high life echo park Austin. Cred
                            vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                            farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                            mustache readymade keffiyeh craft.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-0">Accordion</h4>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="mt-4">
                            <h5 class="font-size-14">Example</h5>
                            <p class="card-title-desc">Click the accordions below to expand/collapse the accordion content.</p>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Accordion Item #1
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="text-muted">
                                                <strong class="text-dark">This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="text-muted">
                                                <strong class="text-dark">This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="text-muted">
                                                <strong class="text-dark">This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion -->
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-6">
                        <div class="mt-4">
                            <h5 class="font-size-14">Flush</h5>
                            <p class="card-title-desc">Add <code>.accordion-flush</code> to remove the default <code>background-color</code>, some borders, and some rounded corners to render accordions edge-to-edge with their parent container.</p>

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                            Accordion Item #1
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body text-muted">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body text-muted">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body text-muted">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<!-- Collapse -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-0">Collapse</h4>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="mt-4">
                            <h5 class="font-size-14">Example</h5>
                            <p class="card-title-desc">
                                You can use a link with the <code>href</code> attribute, or a button with the <code>data-bs-target</code> attribute. In both cases, the <code>data-bs-toggle="collapse"</code> is required.
                            </p>

                            <div class="d-flex gap-2 flex-wrap mb-3">
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Link with href
                                </a>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Button with data-bs-target
                                </button>
                            </div>
                            <div class="collapse show" id="collapseExample">
                                <div class="card border shadow-none card-body text-muted mb-0">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="mt-4">
                            <h5 class="font-size-14">Multiple targets</h5>
                            <p class="card-title-desc">
                                A <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> can show and hide multiple elements by referencing them with a selector in its <code>href</code> or <code>data-bs-target</code> attribute.
                            </p>

                            <div class="d-flex gap-2 flex-wrap mb-3">
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="collapse multi-collapse show" id="multiCollapseExample1">
                                        <div class="card border shadow-none card-body text-muted mb-0">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="collapse multi-collapse show" id="multiCollapseExample2">
                                        <div class="card border shadow-none card-body text-muted mb-0">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- end row -->

<!-- Collapse -->
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Horizontal Collapse</h4>
                <p class="card-title-desc">The collapse plugin also supports horizontal collapsing. Add the <code>.collapse-horizontal</code> modifier class to transition the <code>width</code> instead of <code>height</code> and set a <code>width</code> on the immediate child element.</p>

                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                        Toggle width collapse
                    </button>
                </p>
                <div style="min-height: 110px;">
                    <div class="collapse collapse-horizontal" id="collapseWidthExample">
                        <div class="card border shadow-none card-body text-muted mb-0" style="width: 300px;">
                            This is some placeholder content for a horizontal collapse. It's hidden by default and shown when
                            triggered.
                        </div>
                    </div>
                </div><!-- end accordion -->

            </div>
        </div>
    </div>

</div>
<!-- end row -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-real\coba\resources\views/ui-tabs-accordions.blade.php ENDPATH**/ ?>