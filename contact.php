<?php

/*
Template Name: Pagla Contact
*/

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<style>
  multi-input {
  display: inline-block;
  margin: 0 20px 20px 0;
}
</style>
  <!-- CONTACT BANNER SECTION START -->
  <section class="contact-banner" <?php if (has_post_thumbnail()) : ?> style="background-image: url(<?php the_post_thumbnail_url('large'); ?> <?php endif; ?>">
    <div class="container">
      <div class="contact-banner-content">
        <h1 class="contact-title"><?php the_title(); ?></h1>
        <p class="contact-text">
          Are you an online store, or Amazon or eBay seller, self-employed
          graphic designer, photographer, or an eCommerce photo studio? Then
          you are in the right place. Doopic specialises in bulk image
          processing and acts an extension of your business by helping you
          with your workflow, allowing you to focus on other parts of your
          business.
        </p>
      </div>
    </div>

    <div class="overlay"></div>
  </section>
  <!-- CONTACT BANNER SECTION END -->

  <!-- CONTACT SECTION START -->
  <section class="contact">
    <div class="container">
      <div class="contact-content">
        <div class="row">
          <div class="col-md-6 col-12">

            <div class="contact-form">
              <div class="wpcf7 js" id="wpcf7-f146-p85-o1" lang="en-US" dir="ltr">
                <div class="screen-reader-response">
                  <p role="status" aria-live="polite" aria-atomic="true"></p>
                  <ul></ul>
                </div>
                <form action="/contact/#wpcf7-f146-p85-o1" method="post" class="wpcf7-form init" aria-label="Contact form" enctype="multipart/form-data" novalidate="novalidate" data-status="init">
                  <div style="display: none;">
                    <input type="hidden" name="_wpcf7" value="146">
                    <input type="hidden" name="_wpcf7_version" value="5.8">
                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f146-p85-o1">
                    <input type="hidden" name="_wpcf7_container_post" value="85">
                    <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                  </div>
                  <div class="col-12">
                    <div class="row">
                      <div class="col-6 inputName">
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512">
                            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
                          </svg>
                        </p>
                        <div class="inputbox inputcol">
                          <div class="form-floating">
                            <p><span class="wpcf7-form-control-wrap" data-name="text-768"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required contact_input" aria-required="true" aria-invalid="false" placeholder="Enter name" value="" type="text" name="text-768"></span>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="inputbox inputcol">
                          <p><svg xmlns="http://www.w3.org/2000/svg" width="20.189" height="15.142" viewBox="0 0 20.189 15.142">
                              <g id="mailIcon" data-name="Group 365" transform="translate(0)">
                                <path id="mailIconPath1" data-name="mailIconPath1" d="M7.063,65.229c2.771,2.347,7.633,6.475,9.062,7.762a.844.844,0,0,0,1.221,0c1.43-1.288,6.292-5.417,9.063-7.764a.42.42,0,0,0,.059-.58A1.67,1.67,0,0,0,25.147,64H8.323A1.67,1.67,0,0,0,7,64.648.42.42,0,0,0,7.063,65.229Z" transform="translate(-6.641 -64)" fill="#000"></path>
                                <path id="mailIconPath2" data-name="mailIconPath2" d="M19.945,126.451a.419.419,0,0,0-.449.061c-3.073,2.6-6.995,5.944-8.228,7.056a1.7,1.7,0,0,1-2.348,0C7.6,132.381,3.2,128.638.692,126.512a.421.421,0,0,0-.692.321V137.41a1.684,1.684,0,0,0,1.682,1.682H18.506a1.684,1.684,0,0,0,1.682-1.682V126.832A.42.42,0,0,0,19.945,126.451Z" transform="translate(0 -123.951)" fill="#000"></path>
                              </g>
                            </svg>
                          </p>
                          <div class="inputs">
                            <div class="form-floating">
                              <p><span class="wpcf7-form-control-wrap" data-name="email-232"><input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email contact_input" aria-required="true" aria-invalid="false" placeholder="Enter Email" value="" type="email" name="email-232"></span>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="phoneInput">
                      <p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                          <path id="callIcon" data-name="callIcon" d="M18.4,13.128a11.355,11.355,0,0,1-3.566-.568,1.63,1.63,0,0,0-1.585.334l-2.249,1.7A12.428,12.428,0,0,1,5.407,9.005l1.648-2.19a1.617,1.617,0,0,0,.4-1.638A11.373,11.373,0,0,1,6.883,1.6,1.607,1.607,0,0,0,5.278,0H1.6A1.607,1.607,0,0,0,0,1.6,18.416,18.416,0,0,0,18.4,20,1.607,1.607,0,0,0,20,18.4V14.732A1.607,1.607,0,0,0,18.4,13.128Z" fill="#000"></path>
                        </svg>
                      </p>
                      <div class="inputbox inputcol">
                        <div class="inputs input-group">
                          <div class="phone">
                            <div class="form-floating">
                              <p><span class="wpcf7-form-control-wrap" data-name="tel-640"><input size="40" class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel contact_input" aria-required="true" aria-invalid="false" placeholder="Enter Phone" value="" type="tel" name="tel-640" autocomplete="off"></span>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="phoneInput">
                      <p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                          <path id="callIcon" data-name="callIcon" d="M18.4,13.128a11.355,11.355,0,0,1-3.566-.568,1.63,1.63,0,0,0-1.585.334l-2.249,1.7A12.428,12.428,0,0,1,5.407,9.005l1.648-2.19a1.617,1.617,0,0,0,.4-1.638A11.373,11.373,0,0,1,6.883,1.6,1.607,1.607,0,0,0,5.278,0H1.6A1.607,1.607,0,0,0,0,1.6,18.416,18.416,0,0,0,18.4,20,1.607,1.607,0,0,0,20,18.4V14.732A1.607,1.607,0,0,0,18.4,13.128Z" fill="#000"></path>
                        </svg>
                      </p>
                      <div class="inputbox inputcol">
                        <div class="inputs input-group">
                          <div class="phone">
                            <div class="form-floating">
                            <multi-input>
      <input list="speakers">
      <datalist id="speakers">
        <option value="Banquo"></option>
        <option value="Bishop Stokesly of London"></option>
        <option value="Caesar’s Second Watchman"></option>
        <option value="Celia"></option>
        <option value="Cleopatra"></option>
        <option value="Dogberry"></option>
        <option value="Falstaff"></option>
        <option value="First Servant"></option>
        <option value="Hamlet"></option>
        <option value="Juliet"></option>
        <option value="Macbeth"></option>
      </datalist>
    </multi-input>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="inputbox">
                      <div class="form-floating comment">
                        <p><span class="wpcf7-form-control-wrap" data-name="textarea-6"><textarea cols="8" rows="3" class="wpcf7-form-control wpcf7-textarea contact_input" aria-invalid="false" placeholder="Enter message" name="textarea-6"></textarea></span>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <!-- <h6 style="margin-bottom: 6px" class="text-left">
      Select files:
    </h6> -->
                    <!-- <label for="myfile">Select files:</label> -->
                    <p><span class="wpcf7-form-control-wrap" data-name="file-570"><input size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required" id="myfile" accept="image/*" aria-required="true" aria-invalid="false" type="file" name="file-570"></span>
                    </p>
                  </div>
                  <div class="col-12">
                    <div class="fusion-text" data-rule_style="default" data-hide_on_mobile="small-visibility,medium-visibility,large-visibility">
                      <p><small style="font-size: 14px">If the size of your Images is more than 25mb then share<br>
                          your images link here from your cloud like Google<br>
                          Drive,Dropbox or Wetransfer</small>
                      </p>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="inputbox">
                      <div class="form-floating comment">
                        <p><input type="text" class="form-control" name="link">
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="submitbox">
                      <p><input class="wpcf7-form-control wpcf7-submit has-spinner btn-clip btn-create btn-fill" type="submit" value="Send"><span class="wpcf7-spinner"></span>
                      </p>
                    </div>
                  </div>
                  <div class="wpcf7-response-output" aria-hidden="true"></div>
                </form>
              </div>
              <!-- hhh -->
            </div>
          </div>

          <div class="col-md-6 col-12">
            <div class="row items-center">
              <p class="transfer-tilte text-center">
                If your Image/ file size is more than 5 MB, please consider
                below options to transfer your images/ files. For any
                assistance please<br />email:
                <span>cs@theclippingpathservice.com</span> or Call :
                <span>+1(718)717-2362</span>
              </p>

              <div class="col-6">
                <div class="file-transfer">
                  <div class="transfer-image">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/contact/dropbox.png" alt="dropbox" />
                  </div>
                  <p class="flexText">
                    You can send images via <br />DropBox
                  </p>
                  <div>
                    <button type="submit" class="transfer-btn">
                      Send using<br />DropBox
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="file-transfer">
                  <div class="transfer-image">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/contact/we-transfer.png" alt="we-transfer" />
                  </div>
                  <p class="flexText">
                    You can send images via <br />WeTransfer
                  </p>
                  <div>
                    <button type="submit" class="transfer-btn">
                      Send using<br />WeTransfer
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTACT SECTION END -->

  <!-- CONTACT INFO SECTION START -->
  <section class="contact-info">
    <div class="container">
      <div class="contact-info-content">
        <div class="info">
          <h2 class="title">Contact Us</h2>

          <p class="text">
            Are you an online store, or Amazon or eBay seller, self-employed
            graphic designer, photographer, or an eCommerce photo studio? Then
            you are in the right place. Doopic specialises in bulk image
            processing and acts an extension of your business by helping you
            with your workflow, allowing you to focus on other parts of your
            business.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="infobox">
              <figure class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="34.76" height="50" viewBox="0 0 34.76 50">
                  <path id="placeholder" d="M11.13,0A17.4,17.4,0,0,0-6.25,17.38c0,12.045,17.4,32.62,17.4,32.62S28.51,28.832,28.51,17.38A17.4,17.4,0,0,0,11.13,0Zm5.244,22.469a7.416,7.416,0,1,1,0-10.487A7.394,7.394,0,0,1,16.374,22.469Zm0,0" transform="translate(6.25)" fill="#00aeef" />
                </svg>
              </figure>

              <h3 class="title">Find Us</h3>

              <p class="text">
                Road no: 10, Avenue: 3, House no: 627, <br />
                Mirpur DOHS, Mirpur-1216, Dhaka
              </p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="infobox">
              <figure class="icon">
                <svg id="call" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                  <g id="Group_337" data-name="Group 337">
                    <path id="Path_426" data-name="Path 426" d="M45.988,32.819a28.388,28.388,0,0,1-8.915-1.42,4.075,4.075,0,0,0-3.963.836l-5.622,4.244A31.069,31.069,0,0,1,13.519,22.513l4.119-5.476a4.041,4.041,0,0,0,.994-4.095,28.432,28.432,0,0,1-1.426-8.93A4.017,4.017,0,0,0,13.194,0H4.012A4.017,4.017,0,0,0,0,4.012,46.04,46.04,0,0,0,45.988,50,4.017,4.017,0,0,0,50,45.988V36.831A4.017,4.017,0,0,0,45.988,32.819Z" fill="#00aeef" />
                  </g>
                </svg>
              </figure>

              <h3 class="title">Contact us</h3>

              <ul class="contactlist">
                <li class="contactlist-item">
                  <a href="tel:+8801754486711" class="contactlist-link">+8801754486711</a>
                </li>
                <li class="contactlist-item">
                  <a href="tel:+880148765456" class="contactlist-link">+880148765456</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4">
            <?php echo do_shortcode('[contact-form-7 id="144" title="Services"]' );?>
            <div class="infobox">
              <figure class="icon">
                <svg id="Group_339" data-name="Group 339" xmlns="http://www.w3.org/2000/svg" width="66.667" height="50" viewBox="0 0 66.667 50">
                  <g id="Group_338" data-name="Group 338">
                    <path id="Path_427" data-name="Path 427" d="M7.405,68.065c9.149,7.764,25.2,21.424,29.922,25.684a2.783,2.783,0,0,0,4.032.005c4.723-4.263,20.777-17.925,29.926-25.689a1.393,1.393,0,0,0,.2-1.92A5.511,5.511,0,0,0,67.121,64H11.569A5.511,5.511,0,0,0,7.21,66.145,1.393,1.393,0,0,0,7.405,68.065Z" transform="translate(-6.012 -64)" fill="#00aeef" />
                    <path id="Path_428" data-name="Path 428" d="M65.861,126.541a1.383,1.383,0,0,0-1.481.2c-10.147,8.6-23.1,19.62-27.172,23.29a5.626,5.626,0,0,1-7.753,0c-4.343-3.911-18.886-16.27-27.169-23.287A1.389,1.389,0,0,0,0,127.8v34.915a5.56,5.56,0,0,0,5.556,5.553H61.111a5.56,5.56,0,0,0,5.555-5.553V127.8A1.388,1.388,0,0,0,65.861,126.541Z" transform="translate(0 -118.269)" fill="#00aeef" />
                  </g>
                </svg>
              </figure>

              <h3 class="title">Email</h3>

              <ul class="contactlist">
                <li class="contactlist-item">
                  <a href="mailto:example@mail.com" class="contactlist-link">example@mail.com</a>
                </li>
                <li class="contactlist-item">
                  <a href="mailto:test@email.com" class="contactlist-link">test@email.com</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTACT INFO SECTION END -->

<?php endwhile; ?>
<script>
  class MultiInput extends HTMLElement {
  constructor() {
    super();
    // This is a hack :^(.
    // ::slotted(input)::-webkit-calendar-picker-indicator doesn't work in any browser.
    // ::slotted() with ::after doesn't work in Safari.
    this.innerHTML +=
    `<style>
    multi-input input::-webkit-calendar-picker-indicator {
      display: none;
    }
    /* NB use of pointer-events to only allow events from the × icon */
    multi-input div.item::after {
      color: black;
      content: '×';
      cursor: pointer;
      font-size: 18px;
      pointer-events: auto;
      position: absolute;
      right: 5px;
      top: -1px;
    }

    </style>`;
    this._shadowRoot = this.attachShadow({mode: 'open'});
    this._shadowRoot.innerHTML =
    `<style>
    :host {
      border: var(--multi-input-border, 1px solid #ddd);
      display: block;
      overflow: hidden;
      padding: 5px;
    }
    /* NB use of pointer-events to only allow events from the × icon */
    ::slotted(div.item) {
      background-color: var(--multi-input-item-bg-color, #dedede);
      border: var(--multi-input-item-border, 1px solid #ccc);
      border-radius: 2px;
      color: #222;
      display: inline-block;
      font-size: var(--multi-input-item-font-size, 14px);
      margin: 5px;
      padding: 2px 25px 2px 5px;
      pointer-events: none;
      position: relative;
      top: -1px;
    }
    /* NB pointer-events: none above */
    ::slotted(div.item:hover) {
      background-color: #eee;
      color: black;
    }
    ::slotted(input) {
      border: none;
      font-size: var(--multi-input-input-font-size, 14px);
      outline: none;
      padding: 10px 10px 10px 5px; 
    }
    </style>
    <slot></slot>`;

    this._datalist = this.querySelector('datalist');
    this._allowedValues = [];
    for (const option of this._datalist.options) {
      this._allowedValues.push(option.value);
    }

    this._input = this.querySelector('input');
    this._input.onblur = this._handleBlur.bind(this);
    this._input.oninput = this._handleInput.bind(this);
    this._input.onkeydown = (event) => {
      this._handleKeydown(event);
    };

    this._allowDuplicates = this.hasAttribute('allow-duplicates');
  }

  // Called by _handleKeydown() when the value of the input is an allowed value.
  _addItem(value) {
    this._input.value = '';
    const item = document.createElement('div');
    item.classList.add('item');
    item.textContent = value;
    this.insertBefore(item, this._input);
    item.onclick = () => {
      this._deleteItem(item);
    };

    // Remove value from datalist options and from _allowedValues array.
    // Value is added back if an item is deleted (see _deleteItem()).
    if (!this._allowDuplicates) {
      for (const option of this._datalist.options) {
        if (option.value === value) {
          option.remove();
        };
      }
      this._allowedValues =
      this._allowedValues.filter((item) => item !== value);
    }
  }

  // Called when the × icon is tapped/clicked or
  // by _handleKeydown() when Backspace is entered.
  _deleteItem(item) {
    const value = item.textContent;
    item.remove();
    // If duplicates aren't allowed, value is removed (in _addItem())
    // as a datalist option and from the _allowedValues array.
    // So — need to add it back here.
    if (!this._allowDuplicates) {
      const option = document.createElement('option');
      option.value = value;
      // Insert as first option seems reasonable...
      this._datalist.insertBefore(option, this._datalist.firstChild);
      this._allowedValues.push(value);
    }
  }

  // Avoid stray text remaining in the input element that's not in a div.item.
  _handleBlur() {
    this._input.value = '';
  }

  // Called when input text changes,
  // either by entering text or selecting a datalist option.
  _handleInput() {
    // Add a div.item, but only if the current value
    // of the input is an allowed value
    const value = this._input.value;
    if (this._allowedValues.includes(value)) {
      this._addItem(value);
    }
  }

  // Called when text is entered or keys pressed in the input element.
  _handleKeydown(event) {
    const itemToDelete = event.target.previousElementSibling;
    const value = this._input.value;
    // On Backspace, delete the div.item to the left of the input
    if (value ==='' && event.key === 'Backspace' && itemToDelete) {
      this._deleteItem(itemToDelete);
    // Add a div.item, but only if the current value
    // of the input is an allowed value
    } else if (this._allowedValues.includes(value)) {
      this._addItem(value);
    }
  }

  // Public method for getting item values as an array.
  getValues() {
    const values = [];
    const items = this.querySelectorAll('.item');
    for (const item of items) {
      values.push(item.textContent);
    }
    return values;
  }
}

window.customElements.define('multi-input', MultiInput);
</script>
<?php get_footer(); ?>