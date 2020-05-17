@section('footer')
<footer class="footer">
  <div class="container">
    <div class="row py-2">
      <span class="col-md-12 footer-author">© Все права защищены
        <a href="{{ route('index') }}" class="footer-author__link">
          "АИС диспетчера ОАС ГУП ЖХ"
        </a> <?php echo date('Y'); ?>
      </span>
    </div>
  </div>
</footer>
