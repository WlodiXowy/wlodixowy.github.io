
let lecimuzyczka = false;

    function TwojaStara() {
        var play=document.getElementById("bgMusic");
        play.play();
        lecimuzyczka = true;
        document.getElementById("twojastaratodziwka").style.opacity = "100";
        document.getElementById("twojstarypijerompera").style.opacity = "0";
    
        document.getElementById('twojastaratodziwka').className = 'fadzikszmato';
        document.getElementById('twojstarysiekurwi').className = 'spierdalaj';

        document.getElementById('twojstarypijerompera').className = 'spierdalaj';
        container.destroy();
    }
    function wlodixowy() {
        document.getElementById("twojastaratodziwka").style.opacity = "0";
        document.getElementById("wlodixowyszef").style.opacity = "100";

        document.getElementById("wlodixowyszef").className = 'fadzikszmato';
        document.getElementById("twojastaratodziwka").className = 'spierdalaj';

        var play=document.getElementById("bgMusic");
        play.pause();
        var muzawlodi=document.getElementById("wlodixowymuzyka");
        muzawlodi.play();
        var vid=document.getElementById("videomain");
        vid.pause();
        var vidwl=document.getElementById("videowlodi");
        vidwl.play();
    }
    function wojtek() {
        document.getElementById("twojastaratodziwka").style.opacity = "0";
        document.getElementById("wojszef").style.opacity = "100";

        document.getElementById("wojszef").className = 'fadzikszmato';
        document.getElementById("twojastaratodziwka").className = 'spierdalaj';

        var play=document.getElementById("bgMusic");
        play.pause();
        var muzawoj=document.getElementById("wojmuzyka");
        muzawoj.play();
        var vid=document.getElementById("videomain");
        vid.pause();
        var vidwoj=document.getElementById("videowoj");
        vidwoj.play();
    }
    function powrotwoj() {
        document.getElementById("twojastaratodziwka").style.opacity = "100";
        document.getElementById("wojszef").style.opacity = "0";
    
        document.getElementById("wojszef").className = 'spierdalaj';
        document.getElementById("twojastaratodziwka").className = 'fadzikszmato';
        var play=document.getElementById("bgMusic");
        play.play();
        var muzawoj=document.getElementById("wojmuzyka");
        muzawoj.pause();
        var vid=document.getElementById("videomain");
        vid.play();
        var vidwoj=document.getElementById("videowoj");
        vidwoj.pause();
    }
    function powrotwlodi() {
        document.getElementById("twojastaratodziwka").style.opacity = "100";
        document.getElementById("wlodixowyszef").style.opacity = "0";

        document.getElementById("wlodixowyszef").className = 'spierdalaj';
        document.getElementById("twojastaratodziwka").className = 'fadzikszmato';
        var play=document.getElementById("bgMusic");
        play.play();
        var muzawlodi=document.getElementById("wlodixowymuzyka");
        muzawlodi.pause();
        var vid=document.getElementById("videomain");
        vid.play();
        var vidwl=document.getElementById("videowlodi");
        vidwl.pause();
    }
var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};



TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};
