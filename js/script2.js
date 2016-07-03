;(function (d, $) {
  var MyUtils, myUtils;
  // MyUtilsオブジェクトをセットアップする
  MyUtils = function(){
    var prop = {
      galleryContainer: $('#gallery-container'),
      ua: window.navigator.userAgent.toLowerCase()
    };
    this.get = function(param){
      return prop[param];
    };
  };
  // MyUtilsオブジェクトを拡張する
  MyUtils.prototype = {
    // 初期化
    init: function(){
      this.setup_SGallery();
      if(this.get('ua').indexOf('msie') != -1) {
        this.fallback_ie();
      }
    },
    // S Galleryプラグインをセットアップする
    setup_SGallery: function(){
       this.get('galleryContainer').sGallery({
         fullScreenEnabled: true
       });
    },
    // Internet Explorer用に調整する
    fallback_ie: function(){
        var
        _t = $('.item'),
        _ts = $('.items--small'),
        _p = $('.items--big'),
        _b = $('.controls .grid');
        _t.on('click', function(){
          _p.addClass('active');
          _ts.addClass('nonactive');
        });
        _b.on('click', function(){
          _p.removeClass('active');
          _ts.removeClass('nonactive');
        });
        $('body').addClass('ie');
     }
  };
  myUtils = new MyUtils();
  myUtils.init();
})(document, jQuery);
