@extends ('pages.master')

@section('title')
servizi
@stop

<!--=======content================================-->
@section('content')
<div id="content">
<div class="bg1 p48">
    <div class="container">
        <div class="row">   
            <div class="grid_12">
                <h3>DOVE SIAMO</h3>
                <div class="map">
                  <iframe class="map_c" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d45768.77311699167!2d12.360986571756305!3d44.19577215102518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sit!4v1452969502372" style="border:0"></iframe>
                </div>
                <div class="box"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. </p></div>
                <address class="address1">
                    <p>8901 Marmora Road, Glasgow, D04 89GR.</p>
                    <dl>
                    <dt></dt>
                    <dd><span>Freephone: </span>+1 800 559 6580</dd>
                    <dd><span>Telephone:</span> +1 800 603 6035</dd>
                    <dd><span>FAX:</span> +1 800 889 9898</dd>
                    <dd><span>E-mail:&nbsp;</span><a href="#">mail@demolink.org</a></dd>
                    </dl>
                </address>
                <address class="address1">
                    <p>9863 - 9867 Mill Road, Cambridge, MG09 99HT.</p>
                    <dl>
                    <dt></dt>
                    <dd><span>Freephone: </span>+1 800 559 6580</dd>
                    <dd><span>Telephone:</span> +1 800 603 6035</dd>
                    <dd><span>FAX:</span> +1 800 889 9898</dd>
                    <dd><span>E-mail:&nbsp;</span><a href="#">mail@demolink.org</a></dd>
                    </dl>
                </address>                                         
            </div>              
        </div>
    </div>
</div>
<div class="bg1">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <h3>Contact form</h3>
            </div>
        </div>
          <div class="row">
            <form id="form">
              <div class="grid_5">
                  <div class="success_wrapper">
                    <div class="success-message">Contact form submitted</div>
                  </div>
                  <label class="name">
                       <input type="text" placeholder="Name" data-constraints="@Required @JustLetters" />
                       <span class="empty-message">*This field is required.</span>
                       <span class="error-message">*This is not a valid name.</span>
                  </label>                  
                  <label class="email">
                       <input type="text" placeholder="E-mail" data-constraints="@Required @Email" />
                       <span class="empty-message">*This field is required.</span>
                       <span class="error-message">*This is not a valid email.</span>
                  </label>
                  <label class="phone">
                       <input type="text" placeholder="Phone" data-constraints="@Required @JustNumbers"/>
                       <span class="empty-message">*This field is required.</span>
                       <span class="error-message">*This is not a valid phone.</span>
                  </label>
              </div>
              <div class="grid_7">
                  <label class="message">
                    <textarea placeholder="Message" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*The message is too short.</span>
                  </label>
                  <div class="clear"></div>       
                  <div>
                    <a href="#" class="link btn" data-type="submit">Send message</a>
                  </div>
              </div>
          </form>
        </div>    
    </div>
</div>
@stop