<section class="container-fluid" id="rodape">
      <div class="container footer">
        <div class="row">
          <div class="col-sm-12 rights">
            <?php the_field('descricao_do_footer', 'options'); ?>
          </div>
        </div>
      </div>
    </section>


    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <?php wp_footer(); ?>
</body>

</html>