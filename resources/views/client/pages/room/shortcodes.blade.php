@extends('client.layout.master')
@section('content')
<section class="page">

    <!-- ===  Page header === -->

    <div class="page-header" style="background-image:url(assets/images/header-1.jpg)">
        <div class="container">
            <h2 class="title">Shortcodes</h2>
            <p>Theme elements, fonts, icons and more</p>
        </div>
    </div>

    <!-- === Shorcodes === -->

    <div class="shortcodes">
        <div class="container">

            <div class="row">

                <div class="col-md-3 visible-md visible-lg">
                    <div data-spy="affix" data-offset-top="290">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="#carousel">Carousel</a></li>
                            <li class="list-group-item"><a href="#typography">Typography</a></li>
                            <li class="list-group-item"><a href="#buttons">Buttons</a></li>
                            <li class="list-group-item"><a href="#checkbox">Checkbox & radio</a></li>
                            <li class="list-group-item"><a href="#steps">Cart steps</a></li>
                            <li class="list-group-item"><a href="#icons-hotel">Hotel icons</a></li>
                            <li class="list-group-item"><a href="#icons-linear">Linear icons</a></li>
                            <li class="list-group-item"><a href="#glyphs">Bootsrap glyph icons</a></li>
                            <li class="list-group-item"><a href="#breadcrumbs">Breadcrumbs</a></li>
                            <li class="list-group-item"><a href="#pagination">Pagination</a></li>
                            <li class="list-group-item"><a href="#alerts">Alerts</a></li>
                            <li class="list-group-item"><a href="#progress">Progress bars</a></li>
                            <li class="list-group-item"><a href="#tables">Tables</a></li>
                            <li class="list-group-item"><a href="#forms">Forms</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-9">

                    <!--======= Carousel -->

                    <div class="panel panel-default" id="carousel">
                        <div class="panel-heading">Carousel</div>
                        <div class="panel-body">

                            <div class="frontpage-slider">
                                <div class="owl-slider owl-slider-header">

                                    <!-- === slide item === -->

                                    <div class="item" style="background-image:url(assets/images/slide-3.jpg)">
                                        <div class="box text-center">
                                            <h2 class="title animated h1" data-animation="fadeInDown">
                                                A moment of pure prestige
                                            </h2>
                                            <div class="desc animated" data-animation="fadeInUp">
                                                Lavish social and business events
                                            </div>
                                            <div class="desc animated" data-animation="fadeInUp">
                                                and unforgettable weddings.
                                            </div>
                                            <div class="animated" data-animation="fadeInUp">
                                                <a href="https://themeforest.net/item/colina-hotel-website-template/20977257" class="btn btn-clean">Buy this template</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- === slide item === -->

                                    <div class="item" style="background-image:url(assets/images/slide-1.jpg)">
                                        <div class="box text-center">
                                            <h2 class="title animated h1" data-animation="slideInRight">
                                                The privacy and <br />
                                                individuality of a custom
                                            </h2>
                                            <div class="desc animated" data-animation="slideInRight">
                                                The Residences have their own dedicated private entrance as well <br />
                                                as an anonymous "celebrity" entrance, for ultimate privacy.
                                            </div>
                                            <div class="animated" data-animation="slideInRight">
                                                <a href="products-grid.html" class="btn btn-clean">Virtual tour</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- === slide item === -->

                                    <div class="item" style="background-image:url(assets/images/slide-2.jpg)">
                                        <div class="box text-center">
                                            <h2 class="title animated h1" data-animation="fadeInDown">Fairmont managed!</h2>
                                            <div class="desc animated" data-animation="fadeInUp">The elegant Champagne Bar, the stylish Colina Club.</div>
                                            <div class="desc animated" data-animation="fadeInUp">Guestrooms and luxurious suites</div>
                                            <div class="animated" data-animation="fadeInUp">
                                                <a href="category.html" class="btn btn-main">Get insipred</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!--/owl-slider-->
                            </div>

                        </div>
                    </div>

                    <!--======= Typography-->

                    <div class="panel panel-default" id="typography">
                        <div class="panel-heading">Typography & Content Formatting</div>
                        <div class="panel-body">
                            <h1>h1. Main heading <small>Secondary text</small></h1>
                            <p><strong>Nam tation ut sed</strong> lobortis clita at et iriure erat exerci kasd at takimata nulla dolor dolore elitr sea ipsum dolore ipsum duo et dolor esse eum eos nonumy labore elit justo clita sit dolor eos amet sit ipsum vero kasd sea dolor gubergren consetetur lorem et eirmod ipsum sed dolores et enim autem duis</p>

                            <h2>h2. Main heading <small>Secondary text</small></h2>
                            <h3>h3. Main heading <small>Secondary text</small></h3>
                            <h4>h4. Main heading <small>Secondary text</small></h4>
                            <h5>h5. Main heading <small>Secondary text</small></h5>
                            <h6>h6. Main heading <small>Secondary text</small></h6>
                            <hr />
                            <p class="lead">This is a lead paragraph. It can be used as subtitle text.</p>
                            <p>
                                This is an
                                <b>ordinary paragraph</b> that is
                                <i>long enough</i> to wrap to
                                <u>multiple lines</u> so that you can see how the line spacing looks.
                            </p>
                            <p class="text-muted">Muted color paragraph.</p>
                            <p class="text-warning">Warning color paragraph.</p>
                            <p class="text-danger">Danger color paragraph.</p>
                            <p class="text-info">Info color paragraph.</p>
                            <p class="text-success">Success color paragraph.</p>
                            <p>
                                <small>This is text in a <code>small</code> wrapper. <abbr title="No Big Deal">NBD</abbr>, right?</small>
                            </p>
                            <hr>
                            <address><strong>Twitter, Inc.</strong><br>795 Folsom Ave, Suite 600<br>San Francisco, CA 94107<br><abbr title="Phone">P:</abbr> (123) 456-7890              </address>
                            <address class="col-6"><strong>Full Name</strong><br><a href="mailto:#">first.last@example.com</a></address>
                            <hr>
                            <blockquote>
                                Here's what a blockquote looks like in Bootstrap. <small>Use <code>small</code> to identify the source.</small>
                            </blockquote>
                            <hr>
                            <div class="row">
                                <div class="col-xs-6">
                                    <ul>
                                        <li>Normal Unordered List</li>
                                        <li>
                                            Can Also Work
                                            <ul>
                                                <li>With Nested Children</li>
                                            </ul>
                                        </li>
                                        <li>Adds Bullets to Page</li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                    <ol>
                                        <li>Normal Ordered List</li>
                                        <li>
                                            Can Also Work
                                            <ol>
                                                <li>With Nested Children</li>
                                            </ol>
                                        </li>
                                        <li>Adds Bullets to Page</li>
                                    </ol>
                                </div>
                            </div>
                            <hr>
                            <pre>function preFormatting() {  // looks like this;  var something = somethingElse;  return true;}</pre>
                        </div>
                    </div>

                    <!--======= Buttons -->

                    <div class="panel panel-default" id="buttons">
                        <div class="panel-heading">Buttons</div>
                        <div class="panel-body">
                            <div class="row buttons">
                                <div class="col-sm-6">
                                    <h5>Theme styles</h5>
                                    <p><button type="button" class="btn btn-main">Main</button></p>
                                    <p><button type="button" class="btn btn-clean-dark">Clean Dark</button></p>
                                    <div class="well" style="background-image:url(assets/images/room-2.jpg)">
                                        <p><button type="button" class="btn btn-main">Main</button></p>
                                        <p><button type="button" class="btn btn-clean">Clean</button></p>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <h5>Default styles</h5>
                                    <!-- Standard button -->
                                    <p><button type="button" class="btn">Simple</button></p>
                                    <p><button type="button" class="btn btn-default">Default</button></p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <p><button type="button" class="btn btn-primary">Primary</button></p>
                                    <!-- Indicates a successful or positive action -->
                                    <p><button type="button" class="btn btn-success">Success</button></p>
                                    <!-- Contextual button for informational alert messages -->
                                    <p><button type="button" class="btn btn-info">Info</button></p>
                                    <!-- Indicates caution should be taken with this action -->
                                    <p><button type="button" class="btn btn-warning">Warning</button></p>
                                    <!-- Indicates a dangerous or potentially negative action -->
                                    <p><button type="button" class="btn btn-danger">Danger</button></p>
                                </div>
                            </div>
                            <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                        </div>
                    </div>

                    <!--======= Checkbox & radio button -->

                    <div class="panel panel-default" id="checkbox">
                        <div class="panel-heading">Checkbox & radio buttons</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Checkboxes</h5>

                                    <div class="clearfix">
                                        <p>Single line</p>
                                        <span class="checkbox">
                                            <input type="checkbox" id="checkIDa1" checked="checked">
                                            <label for="checkIDa1">Checkbox 1</label>
                                        </span>
                                        <span class="checkbox">
                                            <input type="checkbox" id="checkIDa2">
                                            <label for="checkIDa2">Checkbox 1</label>
                                        </span>
                                    </div>

                                    <hr />

                                    <div class="clearfix">
                                        <h5>Checkbox inline</h5>
                                        <span class="checkbox checkbox-inline">
                                            <input type="checkbox" id="checkIDa3" checked="checked">
                                            <label for="checkIDa3">Checkbox 2</label>
                                        </span>
                                        <span class="checkbox checkbox-inline">
                                            <input type="checkbox" id="checkIDa4">
                                            <label for="checkIDa4">Checkbox 3</label>
                                        </span>
                                    </div>

                                    <hr />

                                    <span class="checkbox">
                                        <input type="checkbox" id="checkIDb1" checked="checked">
                                        <label for="checkIDb1">
                                            Checkbox 1
                                            <small>Ipsum takimata clita in kasd duis et laoreet erat dolor sit nulla amet voluptua ut clita accumsan ut sea nostrud</small>
                                        </label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="checkbox" id="checkIDb2">
                                        <label for="checkIDb2">
                                            Checkbox 2 <br />
                                            <small>Ipsum takimata clita in kasd duis et laoreet erat dolor sit nulla amet voluptua ut clita accumsan ut sea nostrud</small>
                                        </label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="checkbox" id="checkIDb3">
                                        <label for="checkIDb3">
                                            Checkbox 3 <br />
                                            <small>Ipsum takimata clita in kasd duis et laoreet erat dolor sit nulla amet voluptua ut clita accumsan ut sea nostrud</small>
                                        </label>
                                    </span>

                                </div>
                                <div class="col-md-6">
                                    <h5>Radio buttons</h5>

                                    <div class="clearfix">
                                        <p>Single line</p>
                                        <span class="checkbox">
                                            <input type="radio" id="radioIDa1" name="radioName1" checked="checked">
                                            <label for="radioIDa1">
                                                <span>Radio option 1</span>
                                            </label>
                                        </span>

                                        <span class="checkbox">
                                            <input type="radio" id="radioIDa2" name="radioName1">
                                            <label for="radioIDa2">
                                                <span>Radio option 2</span>
                                            </label>
                                        </span>
                                    </div>

                                    <hr />

                                    <div class="clearfix">
                                        <h5>Radio button line</h5>
                                        <span class="checkbox checkbox-inline">
                                            <input type="radio" id="radioIDb1" name="radioName2" checked="checked">
                                            <label for="radioIDb1">
                                                <span>Radio option 1</span>
                                            </label>
                                        </span>

                                        <span class="checkbox checkbox-inline">
                                            <input type="radio" id="radioIDb2" name="radioName2">
                                            <label for="radioIDb2">
                                                <span>Radio option 2</span>
                                            </label>
                                        </span>
                                    </div>

                                    <hr />

                                    <span class="checkbox">
                                        <input type="radio" id="radioIDc1" name="radioName3" checked="checked">
                                        <label for="radioIDc1">
                                            <span>Radio button label</span> <br />
                                            <small>Ut ipsum dolore dolor dolore nulla volutpat duo consetetur tation sit dolore stet ad qui erat et labore imperdiet dolore</small>
                                        </label>
                                    </span>

                                    <span class="checkbox">
                                        <input type="radio" id="radioIDc2" name="radioName3">
                                        <label for="radioIDc2">
                                            <span>Radio button label</span> <br />
                                            <small>Ut ipsum dolore dolor dolore nulla volutpat duo consetetur tation sit dolore stet ad qui erat et labore imperdiet dolore</small>
                                        </label>
                                    </span>

                                    <span class="checkbox">
                                        <input type="radio" id="radioIDc3" name="radioName3">
                                        <label for="radioIDc3">
                                            <span>Radio button label</span> <br />
                                            <small>Ut ipsum dolore dolor dolore nulla volutpat duo consetetur tation sit dolore stet ad qui erat et labore imperdiet dolore</small>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--======= Cart steps -->

                    <div class="panel panel-default" id="steps">
                        <div class="panel-heading">Cart steps</div>
                        <div class="panel-body">
                            <h5>Setup - 3 steps</h5>
                            <div class="step-wrapper">
                                <div class="stepper">
                                    <ul class="row">
                                        <li class="col-md-4 active">
                                            <span data-text="Step one"></span>
                                        </li>
                                        <li class="col-md-4 active">
                                            <span data-text="Step two"></span>
                                        </li>
                                        <li class="col-md-4">
                                            <span data-text="Step three"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr />
                            <h5>Setup - 4 steps</h5>
                            <div class="step-wrapper">
                                <div class="stepper">
                                    <ul class="row">
                                        <li class="col-md-3 active">
                                            <span data-text="Step one"></span>
                                        </li>
                                        <li class="col-md-3">
                                            <span data-text="Step two"></span>
                                        </li>
                                        <li class="col-md-3">
                                            <span data-text="Step three"></span>
                                        </li>
                                        <li class="col-md-3">
                                            <span data-text="Step four"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--======= Furniture Icons -->

                    <div class="panel panel-default" id="icons-hotel">
                        <div class="panel-heading">Hotel icons</div>
                        <div class="panel-body">
                            <div class="row icons-wrapper">
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-air-condition"></i>
                                        <figcaption>hotelicon-air-condition</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-bathtub"></i>
                                        <figcaption>hotelicon-bathtub</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-bed"></i>
                                        <figcaption>hotelicon-bed</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-burger"></i>
                                        <figcaption>hotelicon-burger</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-card"></i>
                                        <figcaption>hotelicon-card</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-coctail"></i>
                                        <figcaption>hotelicon-coctail</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-coffee"></i>
                                        <figcaption>hotelicon-coffee</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-compas"></i>
                                        <figcaption>hotelicon-compas</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-dining"></i>
                                        <figcaption>hotelicon-dining</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-guest"></i>
                                        <figcaption>hotelicon-guest</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-guestbook"></i>
                                        <figcaption>hotelicon-guestbook</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-hangers"></i>
                                        <figcaption>hotelicon-hangers</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-clock"></i>
                                        <figcaption>hotelicon-clock</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-hotel"></i>
                                        <figcaption>hotelicon-hotel</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-icecream"></i>
                                        <figcaption>hotelicon-icecream</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-keys"></i>
                                        <figcaption>hotelicon-keys</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-king-bed"></i>
                                        <figcaption>hotelicon-king-bed</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-kitchen"></i>
                                        <figcaption>hotelicon-kitchen</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-parking"></i>
                                        <figcaption>hotelicon-parking</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-phone"></i>
                                        <figcaption>hotelicon-phone</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-plane"></i>
                                        <figcaption>hotelicon-plane</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-pool"></i>
                                        <figcaption>hotelicon-pool</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-private"></i>
                                        <figcaption>hotelicon-private</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-roomservice"></i>
                                        <figcaption>hotelicon-roomservice</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-stuff"></i>
                                        <figcaption>hotelicon-stuff</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-tv"></i>
                                        <figcaption>hotelicon-tv</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-washer"></i>
                                        <figcaption>hotelicon-washer</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-wheel-chair"></i>
                                        <figcaption>hotelicon-wheel-chair</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-wheels"></i>
                                        <figcaption>hotelicon-wheels</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-wifi"></i>
                                        <figcaption>hotelicon-wifi</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <figure>
                                        <i class="hotelicon hotelicon-elevator"></i>
                                        <figcaption>hotelicon-elevator</figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--======= Linear Icons -->

                    <div class="panel panel-default" id="icons-linear">
                        <div class="panel-heading">Linear icons</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-home"></span>
                                        <span class="mls"> icon-home</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-apartment"></span>
                                        <span class="mls"> icon-apartment</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-pencil"></span>
                                        <span class="mls"> icon-pencil</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-magic-wand"></span>
                                        <span class="mls"> icon-magic-wand</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-drop"></span>
                                        <span class="mls"> icon-drop</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-lighter"></span>
                                        <span class="mls"> icon-lighter</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-poop"></span>
                                        <span class="mls"> icon-poop</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-sun"></span>
                                        <span class="mls"> icon-sun</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-moon"></span>
                                        <span class="mls"> icon-moon</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-cloud"></span>
                                        <span class="mls"> icon-cloud</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-cloud-upload"></span>
                                        <span class="mls"> icon-cloud-upload</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-cloud-download"></span>
                                        <span class="mls"> icon-cloud-download</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-cloud-sync"></span>
                                        <span class="mls"> icon-cloud-sync</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-cloud-check"></span>
                                        <span class="mls"> icon-cloud-check</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-database"></span>
                                        <span class="mls"> icon-database</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-lock"></span>
                                        <span class="mls"> icon-lock</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-cog"></span>
                                        <span class="mls"> icon-cog</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-trash"></span>
                                        <span class="mls"> icon-trash</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-dice"></span>
                                        <span class="mls"> icon-dice</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-heart"></span>
                                        <span class="mls"> icon-heart</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-star"></span>
                                        <span class="mls"> icon-star</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-star-half"></span>
                                        <span class="mls"> icon-star-half</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-star-empty"></span>
                                        <span class="mls"> icon-star-empty</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-flag"></span>
                                        <span class="mls"> icon-flag</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-envelope"></span>
                                        <span class="mls"> icon-envelope</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-paperclip"></span>
                                        <span class="mls"> icon-paperclip</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-inbox"></span>
                                        <span class="mls"> icon-inbox</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-eye"></span>
                                        <span class="mls"> icon-eye</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-printer"></span>
                                        <span class="mls"> icon-printer</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-file-empty"></span>
                                        <span class="mls"> icon-file-empty</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-file-add"></span>
                                        <span class="mls"> icon-file-add</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-enter"></span>
                                        <span class="mls"> icon-enter</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-exit"></span>
                                        <span class="mls"> icon-exit</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-graduation-hat"></span>
                                        <span class="mls"> icon-graduation-hat</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-license"></span>
                                        <span class="mls"> icon-license</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-music-note"></span>
                                        <span class="mls"> icon-music-note</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-film-play"></span>
                                        <span class="mls"> icon-film-play</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-camera-video"></span>
                                        <span class="mls"> icon-camera-video</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-camera"></span>
                                        <span class="mls"> icon-camera</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-picture"></span>
                                        <span class="mls"> icon-picture</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-book"></span>
                                        <span class="mls"> icon-book</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-bookmark"></span>
                                        <span class="mls"> icon-bookmark</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-user"></span>
                                        <span class="mls"> icon-user</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-users"></span>
                                        <span class="mls"> icon-users</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-shirt"></span>
                                        <span class="mls"> icon-shirt</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-store"></span>
                                        <span class="mls"> icon-store</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-cart"></span>
                                        <span class="mls"> icon-cart</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-tag"></span>
                                        <span class="mls"> icon-tag</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-phone-handset"></span>
                                        <span class="mls"> icon-phone-handset</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-phone"></span>
                                        <span class="mls"> icon-phone</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-pushpin"></span>
                                        <span class="mls"> icon-pushpin</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-map-marker"></span>
                                        <span class="mls"> icon-map-marker</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-map"></span>
                                        <span class="mls"> icon-map</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-location"></span>
                                        <span class="mls"> icon-location</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-calendar-full"></span>
                                        <span class="mls"> icon-calendar-full</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-keyboard"></span>
                                        <span class="mls"> icon-keyboard</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-spell-check"></span>
                                        <span class="mls"> icon-spell-check</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-screen"></span>
                                        <span class="mls"> icon-screen</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-smartphone"></span>
                                        <span class="mls"> icon-smartphone</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-tablet"></span>
                                        <span class="mls"> icon-tablet</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-laptop"></span>
                                        <span class="mls"> icon-laptop</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-laptop-phone"></span>
                                        <span class="mls"> icon-laptop-phone</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-power-switch"></span>
                                        <span class="mls"> icon-power-switch</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-bubble"></span>
                                        <span class="mls"> icon-bubble</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-heart-pulse"></span>
                                        <span class="mls"> icon-heart-pulse</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-construction"></span>
                                        <span class="mls"> icon-construction</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-pie-chart"></span>
                                        <span class="mls"> icon-pie-chart</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-chart-bars"></span>
                                        <span class="mls"> icon-chart-bars</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-gift"></span>
                                        <span class="mls"> icon-gift</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-diamond"></span>
                                        <span class="mls"> icon-diamond</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-linearicons"></span>
                                        <span class="mls"> icon-linearicons</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-dinner"></span>
                                        <span class="mls"> icon-dinner</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-coffee-cup"></span>
                                        <span class="mls"> icon-coffee-cup</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-leaf"></span>
                                        <span class="mls"> icon-leaf</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-paw"></span>
                                        <span class="mls"> icon-paw</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-rocket"></span>
                                        <span class="mls"> icon-rocket</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-briefcase"></span>
                                        <span class="mls"> icon-briefcase</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-bus"></span>
                                        <span class="mls"> icon-bus</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-car"></span>
                                        <span class="mls"> icon-car</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-train"></span>
                                        <span class="mls"> icon-train</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-bicycle"></span>
                                        <span class="mls"> icon-bicycle</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-wheelchair"></span>
                                        <span class="mls"> icon-wheelchair</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-select"></span>
                                        <span class="mls"> icon-select</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-earth"></span>
                                        <span class="mls"> icon-earth</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-smile"></span>
                                        <span class="mls"> icon-smile</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-sad"></span>
                                        <span class="mls"> icon-sad</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-neutral"></span>
                                        <span class="mls"> icon-neutral</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-mustache"></span>
                                        <span class="mls"> icon-mustache</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-alarm"></span>
                                        <span class="mls"> icon-alarm</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-bullhorn"></span>
                                        <span class="mls"> icon-bullhorn</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-volume-high"></span>
                                        <span class="mls"> icon-volume-high</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-volume-medium"></span>
                                        <span class="mls"> icon-volume-medium</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-volume-low"></span>
                                        <span class="mls"> icon-volume-low</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-volume"></span>
                                        <span class="mls"> icon-volume</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-mic"></span>
                                        <span class="mls"> icon-mic</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-hourglass"></span>
                                        <span class="mls"> icon-hourglass</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-undo"></span>
                                        <span class="mls"> icon-undo</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-redo"></span>
                                        <span class="mls"> icon-redo</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-sync"></span>
                                        <span class="mls"> icon-sync</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-history"></span>
                                        <span class="mls"> icon-history</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-clock"></span>
                                        <span class="mls"> icon-clock</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-download"></span>
                                        <span class="mls"> icon-download</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-upload"></span>
                                        <span class="mls"> icon-upload</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-enter-down"></span>
                                        <span class="mls"> icon-enter-down</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-exit-up"></span>
                                        <span class="mls"> icon-exit-up</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-bug"></span>
                                        <span class="mls"> icon-bug</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-code"></span>
                                        <span class="mls"> icon-code</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-link"></span>
                                        <span class="mls"> icon-link</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-unlink"></span>
                                        <span class="mls"> icon-unlink</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-thumbs-up"></span>
                                        <span class="mls"> icon-thumbs-up</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-thumbs-down"></span>
                                        <span class="mls"> icon-thumbs-down</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-magnifier"></span>
                                        <span class="mls"> icon-magnifier</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-cross"></span>
                                        <span class="mls"> icon-cross</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-menu"></span>
                                        <span class="mls"> icon-menu</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-list"></span>
                                        <span class="mls"> icon-list</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-chevron-up"></span>
                                        <span class="mls"> icon-chevron-up</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-chevron-down"></span>
                                        <span class="mls"> icon-chevron-down</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-chevron-left"></span>
                                        <span class="mls"> icon-chevron-left</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-chevron-right"></span>
                                        <span class="mls"> icon-chevron-right</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-arrow-up"></span>
                                        <span class="mls"> icon-arrow-up</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-arrow-down"></span>
                                        <span class="mls"> icon-arrow-down</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-arrow-left"></span>
                                        <span class="mls"> icon-arrow-left</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-arrow-right"></span>
                                        <span class="mls"> icon-arrow-right</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-move"></span>
                                        <span class="mls"> icon-move</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-warning"></span>
                                        <span class="mls"> icon-warning</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-question-circle"></span>
                                        <span class="mls"> icon-question-circle</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-menu-circle"></span>
                                        <span class="mls"> icon-menu-circle</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-checkmark-circle"></span>
                                        <span class="mls"> icon-checkmark-circle</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-cross-circle"></span>
                                        <span class="mls"> icon-cross-circle</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-plus-circle"></span>
                                        <span class="mls"> icon-plus-circle</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-circle-minus"></span>
                                        <span class="mls"> icon-circle-minus</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-arrow-up-circle"></span>
                                        <span class="mls"> icon-arrow-up-circle</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-arrow-down-circle"></span>
                                        <span class="mls"> icon-arrow-down-circle</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-arrow-left-circle"></span>
                                        <span class="mls"> icon-arrow-left-circle</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-arrow-right-circle"></span>
                                        <span class="mls"> icon-arrow-right-circle</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-chevron-up-circle"></span>
                                        <span class="mls"> icon-chevron-up-circle</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-chevron-down-circle"></span>
                                        <span class="mls"> icon-chevron-down-circle</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-chevron-left-circle"></span>
                                        <span class="mls"> icon-chevron-left-circle</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-chevron-right-circle"></span>
                                        <span class="mls"> icon-chevron-right-circle</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-crop"></span>
                                        <span class="mls"> icon-crop</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-frame-expand"></span>
                                        <span class="mls"> icon-frame-expand</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-frame-contract"></span>
                                        <span class="mls"> icon-frame-contract</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-layers"></span>
                                        <span class="mls"> icon-layers</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-funnel"></span>
                                        <span class="mls"> icon-funnel</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-text-format"></span>
                                        <span class="mls"> icon-text-format</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-text-format-remove"></span>
                                        <span class="mls"> icon-text-format-remove</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-text-size"></span>
                                        <span class="mls"> icon-text-size</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-bold"></span>
                                        <span class="mls"> icon-bold</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-italic"></span>
                                        <span class="mls"> icon-italic</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-underline"></span>
                                        <span class="mls"> icon-underline</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-strikethrough"></span>
                                        <span class="mls"> icon-strikethrough</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-highlight"></span>
                                        <span class="mls"> icon-highlight</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-text-align-left"></span>
                                        <span class="mls"> icon-text-align-left</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-text-align-center"></span>
                                        <span class="mls"> icon-text-align-center</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-text-align-right"></span>
                                        <span class="mls"> icon-text-align-right</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-text-align-justify"></span>
                                        <span class="mls"> icon-text-align-justify</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-line-spacing"></span>
                                        <span class="mls"> icon-line-spacing</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-indent-increase"></span>
                                        <span class="mls"> icon-indent-increase</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-indent-decrease"></span>
                                        <span class="mls"> icon-indent-decrease</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-pilcrow"></span>
                                        <span class="mls"> icon-pilcrow</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-direction-ltr"></span>
                                        <span class="mls"> icon-direction-ltr</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-direction-rtl"></span>
                                        <span class="mls"> icon-direction-rtl</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-page-break"></span>
                                        <span class="mls"> icon-page-break</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-sort-alpha-asc"></span>
                                        <span class="mls"> icon-sort-alpha-asc</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-sort-amount-asc"></span>
                                        <span class="mls"> icon-sort-amount-asc</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-hand"></span>
                                        <span class="mls"> icon-hand</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-pointer-up"></span>
                                        <span class="mls"> icon-pointer-up</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-pointer-right"></span>
                                        <span class="mls"> icon-pointer-right</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-pointer-down"></span>
                                        <span class="mls"> icon-pointer-down</span>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="clearfix">
                                        <span class="icon icon-pointer-left"></span>
                                        <span class="mls"> icon-pointer-left</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--======= Bootstrap icons -->

                    <div id="glyphs" class="panel panel-default">
                        <div class="panel-heading">Bootsrtap icons <span class="btn btn-main btn-xs show-all">Show all</span></div>
                        <div class="panel-body">
                            <div class="bs-glyphicons"> <ul class="bs-glyphicons-list"> <li> <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-asterisk</span> </li> <li> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-plus</span> </li> <li> <span class="glyphicon glyphicon-euro" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-euro</span> </li> <li> <span class="glyphicon glyphicon-eur" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-eur</span> </li> <li> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-minus</span> </li> <li> <span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-cloud</span> </li> <li> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-envelope</span> </li> <li> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-pencil</span> </li> <li> <span class="glyphicon glyphicon-glass" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-glass</span> </li> <li> <span class="glyphicon glyphicon-music" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-music</span> </li> <li> <span class="glyphicon glyphicon-search" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-search</span> </li> <li> <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-heart</span> </li> <li> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-star</span> </li> <li> <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-star-empty</span> </li> <li> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-user</span> </li> <li> <span class="glyphicon glyphicon-film" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-film</span> </li> <li> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-th-large</span> </li> <li> <span class="glyphicon glyphicon-th" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-th</span> </li> <li> <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-th-list</span> </li> <li> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-ok</span> </li> <li> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-remove</span> </li> <li> <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-zoom-in</span> </li> <li> <span class="glyphicon glyphicon-zoom-out" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-zoom-out</span> </li> <li> <span class="glyphicon glyphicon-off" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-off</span> </li> <li> <span class="glyphicon glyphicon-signal" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-signal</span> </li> <li> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-cog</span> </li> <li> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-trash</span> </li> <li> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-home</span> </li> <li> <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-file</span> </li> <li> <span class="glyphicon glyphicon-time" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-time</span> </li> <li> <span class="glyphicon glyphicon-road" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-road</span> </li> <li> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-download-alt</span> </li> <li> <span class="glyphicon glyphicon-download" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-download</span> </li> <li> <span class="glyphicon glyphicon-upload" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-upload</span> </li> <li> <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-inbox</span> </li> <li> <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-play-circle</span> </li> <li> <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-repeat</span> </li> <li> <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-refresh</span> </li> <li> <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-list-alt</span> </li> <li> <span class="glyphicon glyphicon-lock" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-lock</span> </li> <li> <span class="glyphicon glyphicon-flag" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-flag</span> </li> <li> <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-headphones</span> </li> <li> <span class="glyphicon glyphicon-volume-off" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-volume-off</span> </li> <li> <span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-volume-down</span> </li> <li> <span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-volume-up</span> </li> <li> <span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-qrcode</span> </li> <li> <span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-barcode</span> </li> <li> <span class="glyphicon glyphicon-tag" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tag</span> </li> <li> <span class="glyphicon glyphicon-tags" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tags</span> </li> <li> <span class="glyphicon glyphicon-book" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-book</span> </li> <li> <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bookmark</span> </li> <li> <span class="glyphicon glyphicon-print" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-print</span> </li> <li> <span class="glyphicon glyphicon-camera" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-camera</span> </li> <li> <span class="glyphicon glyphicon-font" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-font</span> </li> <li> <span class="glyphicon glyphicon-bold" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bold</span> </li> <li> <span class="glyphicon glyphicon-italic" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-italic</span> </li> <li> <span class="glyphicon glyphicon-text-height" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-text-height</span> </li> <li> <span class="glyphicon glyphicon-text-width" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-text-width</span> </li> <li> <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-align-left</span> </li> <li> <span class="glyphicon glyphicon-align-center" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-align-center</span> </li> <li> <span class="glyphicon glyphicon-align-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-align-right</span> </li> <li> <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-align-justify</span> </li> <li> <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-list</span> </li> <li> <span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-indent-left</span> </li> <li> <span class="glyphicon glyphicon-indent-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-indent-right</span> </li> <li> <span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-facetime-video</span> </li> <li> <span class="glyphicon glyphicon-picture" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-picture</span> </li> <li> <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-map-marker</span> </li> <li> <span class="glyphicon glyphicon-adjust" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-adjust</span> </li> <li> <span class="glyphicon glyphicon-tint" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tint</span> </li> <li> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-edit</span> </li> <li> <span class="glyphicon glyphicon-share" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-share</span> </li> <li> <span class="glyphicon glyphicon-check" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-check</span> </li> <li> <span class="glyphicon glyphicon-move" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-move</span> </li> <li> <span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-step-backward</span> </li> <li> <span class="glyphicon glyphicon-fast-backward" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-fast-backward</span> </li> <li> <span class="glyphicon glyphicon-backward" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-backward</span> </li> <li> <span class="glyphicon glyphicon-play" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-play</span> </li> <li> <span class="glyphicon glyphicon-pause" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-pause</span> </li> <li> <span class="glyphicon glyphicon-stop" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-stop</span> </li> <li> <span class="glyphicon glyphicon-forward" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-forward</span> </li> <li> <span class="glyphicon glyphicon-fast-forward" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-fast-forward</span> </li> <li> <span class="glyphicon glyphicon-step-forward" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-step-forward</span> </li> <li> <span class="glyphicon glyphicon-eject" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-eject</span> </li> <li> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-chevron-left</span> </li> <li> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-chevron-right</span> </li> <li> <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-plus-sign</span> </li> <li> <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-minus-sign</span> </li> <li> <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-remove-sign</span> </li> <li> <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-ok-sign</span> </li> <li> <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-question-sign</span> </li> <li> <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-info-sign</span> </li> <li> <span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-screenshot</span> </li> <li> <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-remove-circle</span> </li> <li> <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-ok-circle</span> </li> <li> <span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-ban-circle</span> </li> <li> <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-arrow-left</span> </li> <li> <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-arrow-right</span> </li> <li> <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-arrow-up</span> </li> <li> <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-arrow-down</span> </li> <li> <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-share-alt</span> </li> <li> <span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-resize-full</span> </li> <li> <span class="glyphicon glyphicon-resize-small" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-resize-small</span> </li> <li> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-exclamation-sign</span> </li> <li> <span class="glyphicon glyphicon-gift" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-gift</span> </li> <li> <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-leaf</span> </li> <li> <span class="glyphicon glyphicon-fire" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-fire</span> </li> <li> <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-eye-open</span> </li> <li> <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-eye-close</span> </li> <li> <span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-warning-sign</span> </li> <li> <span class="glyphicon glyphicon-plane" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-plane</span> </li> <li> <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-calendar</span> </li> <li> <span class="glyphicon glyphicon-random" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-random</span> </li> <li> <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-comment</span> </li> <li> <span class="glyphicon glyphicon-magnet" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-magnet</span> </li> <li> <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-chevron-up</span> </li> <li> <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-chevron-down</span> </li> <li> <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-retweet</span> </li> <li> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-shopping-cart</span> </li> <li> <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-folder-close</span> </li> <li> <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-folder-open</span> </li> <li> <span class="glyphicon glyphicon-resize-vertical" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-resize-vertical</span> </li> <li> <span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-resize-horizontal</span> </li> <li> <span class="glyphicon glyphicon-hdd" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-hdd</span> </li> <li> <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bullhorn</span> </li> <li> <span class="glyphicon glyphicon-bell" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bell</span> </li> <li> <span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-certificate</span> </li> <li> <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-thumbs-up</span> </li> <li> <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-thumbs-down</span> </li> <li> <span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-hand-right</span> </li> <li> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-hand-left</span> </li> <li> <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-hand-up</span> </li> <li> <span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-hand-down</span> </li> <li> <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-right</span> </li> <li> <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-left</span> </li> <li> <span class="glyphicon glyphicon-circle-arrow-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-up</span> </li> <li> <span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-down</span> </li> <li> <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-globe</span> </li> <li> <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-wrench</span> </li> <li> <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tasks</span> </li> <li> <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-filter</span> </li> <li> <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-briefcase</span> </li> <li> <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-fullscreen</span> </li> <li> <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-dashboard</span> </li> <li> <span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-paperclip</span> </li> <li> <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-heart-empty</span> </li> <li> <span class="glyphicon glyphicon-link" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-link</span> </li> <li> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-phone</span> </li> <li> <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-pushpin</span> </li> <li> <span class="glyphicon glyphicon-usd" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-usd</span> </li> <li> <span class="glyphicon glyphicon-gbp" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-gbp</span> </li> <li> <span class="glyphicon glyphicon-sort" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sort</span> </li> <li> <span class="glyphicon glyphicon-sort-by-alphabet" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet</span> </li> <li> <span class="glyphicon glyphicon-sort-by-alphabet-alt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet-alt</span> </li> <li> <span class="glyphicon glyphicon-sort-by-order" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sort-by-order</span> </li> <li> <span class="glyphicon glyphicon-sort-by-order-alt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sort-by-order-alt</span> </li> <li> <span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes</span> </li> <li> <span class="glyphicon glyphicon-sort-by-attributes-alt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes-alt</span> </li> <li> <span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-unchecked</span> </li> <li> <span class="glyphicon glyphicon-expand" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-expand</span> </li> <li> <span class="glyphicon glyphicon-collapse-down" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-collapse-down</span> </li> <li> <span class="glyphicon glyphicon-collapse-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-collapse-up</span> </li> <li> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-log-in</span> </li> <li> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-flash</span> </li> <li> <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-log-out</span> </li> <li> <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-new-window</span> </li> <li> <span class="glyphicon glyphicon-record" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-record</span> </li> <li> <span class="glyphicon glyphicon-save" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-save</span> </li> <li> <span class="glyphicon glyphicon-open" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-open</span> </li> <li> <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-saved</span> </li> <li> <span class="glyphicon glyphicon-import" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-import</span> </li> <li> <span class="glyphicon glyphicon-export" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-export</span> </li> <li> <span class="glyphicon glyphicon-send" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-send</span> </li> <li> <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-floppy-disk</span> </li> <li> <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-floppy-saved</span> </li> <li> <span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-floppy-remove</span> </li> <li> <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-floppy-save</span> </li> <li> <span class="glyphicon glyphicon-floppy-open" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-floppy-open</span> </li> <li> <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-credit-card</span> </li> <li> <span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-transfer</span> </li> <li> <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-cutlery</span> </li> <li> <span class="glyphicon glyphicon-header" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-header</span> </li> <li> <span class="glyphicon glyphicon-compressed" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-compressed</span> </li> <li> <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-earphone</span> </li> <li> <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-phone-alt</span> </li> <li> <span class="glyphicon glyphicon-tower" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tower</span> </li> <li> <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-stats</span> </li> <li> <span class="glyphicon glyphicon-sd-video" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sd-video</span> </li> <li> <span class="glyphicon glyphicon-hd-video" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-hd-video</span> </li> <li> <span class="glyphicon glyphicon-subtitles" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-subtitles</span> </li> <li> <span class="glyphicon glyphicon-sound-stereo" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sound-stereo</span> </li> <li> <span class="glyphicon glyphicon-sound-dolby" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sound-dolby</span> </li> <li> <span class="glyphicon glyphicon-sound-5-1" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sound-5-1</span> </li> <li> <span class="glyphicon glyphicon-sound-6-1" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sound-6-1</span> </li> <li> <span class="glyphicon glyphicon-sound-7-1" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sound-7-1</span> </li> <li> <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-copyright-mark</span> </li> <li> <span class="glyphicon glyphicon-registration-mark" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-registration-mark</span> </li> <li> <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-cloud-download</span> </li> <li> <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-cloud-upload</span> </li> <li> <span class="glyphicon glyphicon-tree-conifer" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tree-conifer</span> </li> <li> <span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tree-deciduous</span> </li> <li> <span class="glyphicon glyphicon-cd" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-cd</span> </li> <li> <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-save-file</span> </li> <li> <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-open-file</span> </li> <li> <span class="glyphicon glyphicon-level-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-level-up</span> </li> <li> <span class="glyphicon glyphicon-copy" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-copy</span> </li> <li> <span class="glyphicon glyphicon-paste" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-paste</span> </li> <li> <span class="glyphicon glyphicon-alert" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-alert</span> </li> <li> <span class="glyphicon glyphicon-equalizer" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-equalizer</span> </li> <li> <span class="glyphicon glyphicon-king" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-king</span> </li> <li> <span class="glyphicon glyphicon-queen" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-queen</span> </li> <li> <span class="glyphicon glyphicon-pawn" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-pawn</span> </li> <li> <span class="glyphicon glyphicon-bishop" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bishop</span> </li> <li> <span class="glyphicon glyphicon-knight" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-knight</span> </li> <li> <span class="glyphicon glyphicon-baby-formula" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-baby-formula</span> </li> <li> <span class="glyphicon glyphicon-tent" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tent</span> </li> <li> <span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-blackboard</span> </li> <li> <span class="glyphicon glyphicon-bed" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bed</span> </li> <li> <span class="glyphicon glyphicon-apple" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-apple</span> </li> <li> <span class="glyphicon glyphicon-erase" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-erase</span> </li> <li> <span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-hourglass</span> </li> <li> <span class="glyphicon glyphicon-lamp" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-lamp</span> </li> <li> <span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-duplicate</span> </li> <li> <span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-piggy-bank</span> </li> <li> <span class="glyphicon glyphicon-scissors" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-scissors</span> </li> <li> <span class="glyphicon glyphicon-bitcoin" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bitcoin</span> </li> <li> <span class="glyphicon glyphicon-btc" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-btc</span> </li> <li> <span class="glyphicon glyphicon-xbt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-xbt</span> </li> <li> <span class="glyphicon glyphicon-yen" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-yen</span> </li> <li> <span class="glyphicon glyphicon-jpy" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-jpy</span> </li> <li> <span class="glyphicon glyphicon-ruble" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-ruble</span> </li> <li> <span class="glyphicon glyphicon-rub" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-rub</span> </li> <li> <span class="glyphicon glyphicon-scale" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-scale</span> </li> <li> <span class="glyphicon glyphicon-ice-lolly" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-ice-lolly</span> </li> <li> <span class="glyphicon glyphicon-ice-lolly-tasted" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-ice-lolly-tasted</span> </li> <li> <span class="glyphicon glyphicon-education" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-education</span> </li> <li> <span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-option-horizontal</span> </li> <li> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-option-vertical</span> </li> <li> <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-menu-hamburger</span> </li> <li> <span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-modal-window</span> </li> <li> <span class="glyphicon glyphicon-oil" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-oil</span> </li> <li> <span class="glyphicon glyphicon-grain" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-grain</span> </li> <li> <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sunglasses</span> </li> <li> <span class="glyphicon glyphicon-text-size" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-text-size</span> </li> <li> <span class="glyphicon glyphicon-text-color" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-text-color</span> </li> <li> <span class="glyphicon glyphicon-text-background" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-text-background</span> </li> <li> <span class="glyphicon glyphicon-object-align-top" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-object-align-top</span> </li> <li> <span class="glyphicon glyphicon-object-align-bottom" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-object-align-bottom</span> </li> <li> <span class="glyphicon glyphicon-object-align-horizontal" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-object-align-horizontal</span> </li> <li> <span class="glyphicon glyphicon-object-align-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-object-align-left</span> </li> <li> <span class="glyphicon glyphicon-object-align-vertical" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-object-align-vertical</span> </li> <li> <span class="glyphicon glyphicon-object-align-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-object-align-right</span> </li> <li> <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-triangle-right</span> </li> <li> <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-triangle-left</span> </li> <li> <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-triangle-bottom</span> </li> <li> <span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-triangle-top</span> </li> <li> <span class="glyphicon glyphicon-console" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-console</span> </li> <li> <span class="glyphicon glyphicon-superscript" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-superscript</span> </li> <li> <span class="glyphicon glyphicon-subscript" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-subscript</span> </li> <li> <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-menu-left</span> </li> <li> <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-menu-right</span> </li> <li> <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-menu-down</span> </li> <li> <span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-menu-up</span> </li> </ul> </div>
                        </div>
                    </div>

                    <!--======= Breadcrumbs -->

                    <div class="panel panel-default" id="breadcrumbs">
                        <div class="panel-heading">Breadcrumbs</div>
                        <div class="panel-body">
                            <div class="well" style="background-image:url(assets/images/activity-1.jpg)">
                                <ol class="breadcrumb breadcrumb-inverted">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Library</a></li>
                                    <li class="active">Data</li>
                                </ol>
                            </div>
                            <hr />
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Library</a></li>
                                <li class="active">Data</li>
                            </ol>
                        </div>
                    </div>

                    <!--======= Pagination -->

                    <div class="panel panel-default" id="pagination">
                        <div class="panel-heading">Pagination</div>
                        <div class="panel-body">
                            <h5>Theme example</h5>
                            <div class="pagination-wrapper">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="disabled"><a href="#">3</a></li>
                                    <li class="active"><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#">7</a></li>
                                    <li><a href="#">8</a></li>
                                    <li><a href="#">9</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <h5>Default example</h5>
                            <div>
                                <ul class="pager">
                                    <li><a href="#">Previous</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                            <h5>Optional</h5>
                            <hr />
                            <div>
                                <ul class="pager">
                                    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
                                    <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--======= Alerts -->

                    <div class="panel panel-default" id="alerts">
                        <div class="panel-heading">Alerts & labels</div>
                        <div class="panel-body">
                            <div class="alert alert-success" role="alert">
                                Et clita commodo enim est est no clita vel ut
                            </div>
                            <div class="alert alert-info" role="alert">
                                Et clita commodo enim est est no clita vel ut
                            </div>
                            <div class="alert alert-warning" role="alert">
                                Et clita commodo enim est est no clita vel ut
                            </div>
                            <div class="alert alert-danger" role="alert">
                                Et clita commodo enim est est no clita vel ut
                            </div>

                            <h3>Labels</h3>
                            <span class="label label-default">Default</span>
                            <span class="label label-primary">Primary</span>
                            <span class="label label-success">Success</span>
                            <span class="label label-info">Info</span>
                            <span class="label label-warning">Warning</span>
                            <span class="label label-danger">Danger</span>

                            <h3>Helpers</h3>
                            <p class="bg-primary">
                                Molestie est takimata labore kasd sea at ea suscipit elit at lorem lorem gubergren
                            </p>
                            <p class="bg-success">
                                Molestie est takimata labore kasd sea at ea suscipit elit at lorem lorem gubergren
                            </p>
                            <p class="bg-info">
                                Molestie est takimata labore kasd sea at ea suscipit elit at lorem lorem gubergren
                            </p>
                            <p class="bg-warning">
                                Molestie est takimata labore kasd sea at ea suscipit elit at lorem lorem gubergren
                            </p>
                            <p class="bg-danger">
                                Molestie est takimata labore kasd sea at ea suscipit elit at lorem lorem gubergren
                            </p>
                        </div>
                    </div>

                    <!--======= Progress bar -->

                    <div class="panel panel-default" id="progress">
                        <div class="panel-heading">
                            Progress Bars
                        </div>
                        <div class="panel-body">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                    <span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" style="width: 35%">
                                    <span class="sr-only">35% Complete (success)</span>
                                </div>
                                <div class="progress-bar progress-bar-warning" style="width: 20%">
                                    <span class="sr-only">20% Complete (warning)</span>
                                </div>
                                <div class="progress-bar progress-bar-danger" style="width: 10%">
                                    <span class='sr-only'>10% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!--======= Tables -->

                    <div class="panel panel-default" id="tables">
                        <div class="panel-heading">Tables</div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Tables</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Michael</td>
                                        <td>Are formatted like this</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Lucille</td>
                                        <td>Do you like them?</td>
                                    </tr>
                                    <tr class="success">
                                        <td>3</td>
                                        <td>Success</td>
                                        <td></td>
                                    </tr>
                                    <tr class="danger">
                                        <td>4</td>
                                        <td>Danger</td>
                                        <td></td>
                                    </tr>
                                    <tr class="warning">
                                        <td>5</td>
                                        <td>Warning</td>
                                        <td></td>
                                    </tr>
                                    <tr class="active">
                                        <td>6</td>
                                        <td>Active</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-striped table-bordered table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Tables</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Michael</td>
                                        <td>This one is bordered and condensed</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Lucille</td>
                                        <td>Do you still like it?</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <!--======= Forms -->

                    <div class="panel panel-default" id="forms">
                        <div class="panel-heading">Forms</div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <input type="password" class="form-control" placeholder="Password">
                                <div class="checkbox">
                                    <input type="checkbox" id="chechid1" checked="checked">
                                    <label for="chechid1">Remember me?</label>
                                </div>
                                <button type="submit" class="btn btn-default">Sign in</button>
                            </form>
                            <hr>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail1" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group has-warning">
                                    <label for="inputEmai2" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmai2" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group has-error">
                                    <label for="inputEmail3" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group has-success">
                                    <label for="inputEmail4" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword5" class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-10">
                                        <input type="password" class="form-control" id="inputPassword5" placeholder="Password">
                                        <span class="checkbox">
                                            <input type="checkbox" id="chechid2">
                                            <label for="chechid2">Remember me?</label>
                                        </span>
                                        <button type="submit" class="btn btn-default">Sign in</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
@endsection
