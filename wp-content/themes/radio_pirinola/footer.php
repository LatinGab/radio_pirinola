<!-- Footer -->
<!--footer-->
<section>
  <footer class="panel_footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <h3>Contáctanos</h3>
          <form>
            <input type="text" class="form-control" placeholder="">
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Email</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Mensaje</label>
              <textarea class="form-control" rows="10"></textarea>
              <button type="submit" class="btn btn-default">Enviar</button>
            </div>
          </form>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <h3>Síguenos</h3>
          <a class="twitter-timeline" data-height="450" href="https://twitter.com/RadioPirinola?ref_src=twsrc%5Etfw">Tweets by RadioPirinola</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <h3>Desde Limache Chile</h3>
        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13386.568429659477!2d-71.28260466969185!3d-32.98684289454437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689d408cb1caeb5%3A0xe50274dce4412df8!2sSan+Francisco+de+Limache%2C+Limache%2C+Regi%C3%B3n+de+Valpara%C3%ADso!5e0!3m2!1ses!2scl!4v1543891330599"
          width="" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </footer>
</section>

<!--reproductor-->
<audio src='https://crolguin.radioca.st/stream'></audio>
<div class="reproductor_radio">
  <div class='player'>
    <div class='info'>
      <div class='name'><span class="cc_streaminfo" data-username="crolguin">RADIO EN VIVO</div>
    </div>
    <div class='btns'>
      <div class="iconfont play-pause icon-play"></div>
    </div>

    <img class="cc_streaminfo" data-type="trackimageurl" data-username="crolguin" />
    <div class='info'>
      <div class='name'><span class="cc_streaminfo" data-type="tracktitle" data-username="crolguin"></div>
      <div class='singer'><span class="cc_streaminfo" data-type="trackartist" data-username="crolguin"></span></div>
    </div>
  </div>
</div>

    <?php wp_footer() ?>
  </body>
</html>
