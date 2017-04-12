<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 footerleft ">
        <div class="logofooter"> {{ trans('footer.logo') }}</div>
        <!--<center>
          <form id="contact_form" action="#" method="POST" enctype="multipart/form-data" class="Forma">
            <div class="form-group">
              <label name="name">{{ trans('footer.Name') }}:</label><br />
              <input id="name" class="input" name="title" type="text" value="" class="form-control" size="50" placeholder="{{ trans('footer.Name') }}*" /><br />
            </div><br />
            <div class="form-group">
              <label name="email">{{ trans('footer.E-Mail') }}:</label><br />
              <input id="email" class="input" name="email" type="text" value="" class="form-control" size="50" placeholder="{{ trans('footer.E-Mail') }}*" /><br />
            </div><br />
            <div class="form-group">
              <label name="message">{{ trans('footer.Message') }}:</label><br />
              <textarea id="message" class="input" name="message" rows="4" cols="50" class="form-control" placeholder="{{ trans('footer.Message') }}*"></textarea><br />
            </div>
            <input id="submit_button" type="submit" value="Send email" class="btn btn-success" />
            {{ csrf_field() }}
          </form>
        </center>-->
        <p>{{ trans('footer.description') }}</p>
        <p><i class="fa fa-map-marker"></i> {{ trans('footer.address') }}</p>
        <p><i class="fa fa-phone"></i> {{ trans('footer.phone') }}</p>
        <p><i class="fa fa-envelope"></i> {{ trans('footer.email') }}</p>

      </div>
      <div class="col-md-6 col-sm-6 footerleft">
        <h6 class="logofooter">{{ trans('footer.links') }}</h6>
        <ul class="footer-ul">
          <li><a href="/about"> {{ trans('footer.abouto') }} </a></li>
          <li><a href="/fiesta"> {{ trans('footer.fiesta') }} </a></li>
          <li><a href="/policy"> {{ trans('footer.private') }}</a></li>
          <li><a href="/buy"> {{ trans('footer.buy') }}</a></li>
          <li><a href="/terms"> {{ trans('footer.termino') }}</a></li>
          <li><a href="/transport"> {{ trans('footer.transporte') }}</a></li>
          <li><a href="/contact"> {{ trans('footer.contact') }}</a></li>
        </ul>
      </div>
      <div class="text-center center-block">
        <a href="https://www.facebook.com/Super-Fiesta-147122385808385/" target="_blank"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
        <a href="https://twitter.com/SuperfiestaCh" target="_blank"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
        <a href="https://www.youtube.com/channel/UCihzaNKIgtyFSbuALeKuAFw" target="_blank"><i id="social-yo" class="fa fa-youtube-square fa-3x social"></i></a>
        <a href="mailto:superfiesta.ch@gmail.com" target="_blank"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
      </div>
      

</footer>
<!--footer start from here-->

<div class="copyright">
  <div class="container">
    <div class="col-md-6 ">
      
    </div>
    <div class="col-md-6 ">
      <p>{{ trans('footer.rights') }}</p>
    </div>
  </div>
</div>