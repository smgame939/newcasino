$(document).ready(function () {
    // Browser detection mobile or desktop using user agents
    if (/Mobi|Android/i.test(navigator.userAgent)) {
        // User is on a mobile device
        console.log('Mobile device detected');
    } else {
        // User is on a desktop
        console.log('Desktop detected');
    }

    var currentPage = window.location.pathname.split('/').pop().split('.').slice(0, -1).join('.');

    if (currentPage == 'index' || currentPage == '' || currentPage == 'slot' || currentPage == 'mini_game' || currentPage == 'live_casino' || currentPage == 'footer') {
        var swiper = new Swiper(".banner_swiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var swiper2 = new Swiper(".swiper_mobile", {
            spaceBetween: 30,
            effect: "fade",
            autoplay: {
              delay: 2500,
              disableOnInteraction: false,
            },
        });
    }

    // Index page dynamic on hover content
    $("[class^=s]").on('mouseenter', function () {
        var classAttribute = $(this).attr('class');

        // Check if classAttribute is not null
        if (classAttribute !== undefined && classAttribute !== null) {
            var matchResult = classAttribute.match(/\d+/);

            // Check if matchResult is not null and has elements
            if (matchResult !== null && matchResult.length > 0) {
                var classNumber = matchResult[0];
                $('.slotLeft').hide();
                $('.slotLeft.slot' + classNumber).toggle();
            }
        }
    });

    // POPUP LOGIN
    $('#loginBtn').on('click', function () {
        $('#login-container').empty();
        $('#login-container').load('/inc/login_pop.php', function () {
            $('#closePop').on('click', function () {
                $('#login-container').empty();
            });
        });
    });

    // POPUP REGISTER
    $('#regBtn').on('click', function () {
        $('#login-container').empty();
        $('#login-container').load('/inc/reg_pop.php', function () {
            $('#closePop').on('click', function () {
                $('#login-container').empty();
            });
        });
    });

    $(document).on('click', '#chooseBank_m', function () {
        $("#bank-list-m").toggle();
    });

    $(document).on('click', '#chooseBank', function () {
        $("#bank-list").toggle();
    });

    $(document).on('click', '.closeBankList', function () {
        $('#bank-list').toggle();
    });
    $(document).on('click', '.closeBankList-m', function () {
        $('#bank-list-m').toggle();
    });

    $(document).on('click', '#bank-list-m li.idnFrame > a', function() {
        // Get the aria-label attribute value
        var ariaLabelValue = $(this).attr('aria-label');
        $('#bank-list-m').toggle();
        $('#chooseBank_m').val(ariaLabelValue);
    });
    $(document).on('click', '#bank-list li.idnFrame', function() {
        // Get the aria-label attribute value
        var bnkName = $(this).find('span.bnkName').text();
        $('#bank-list').toggle();
        $('input[name="bankName"]').val(bnkName);
    });

    // POPUP CONTACT
    $('#contactBtn').on('click', function () {
        $('#login-container').load('/inc/contact_pop.php', function () {
            $('#closePop').on('click', function () {
                $('#login-container').empty();
            });
        });
    });

    // SLOT PAGE 'show more' provider button
    $('.arrow-zone').on('click', function () {
        $(this).toggleClass('arrowGO');
        $('.all-game').toggle();
    });

    // SLOT PAGE hover effect for providers
    $('.all-3party ul li').on('mouseenter', function () {
        $(this).children('.pic').addClass('aniTab');
    });

    $('.game-frame').on('mouseenter', function () {
        $(this).children('.pic').addClass('aniTab');
    });

    $('.all-3party ul li').on('mouseleave', function () {
        $(this).children('.pic').removeClass('aniTab');
    });

    $('.game-frame').on('mouseleave', function () {
        $(this).children('.pic').removeClass('aniTab');
    });

    // Collapsible content
    // SPORTS
    $('.cube > .titleS').on('click', function () {
        $(this).siblings('div').toggle();
        $(this).find('.arrowT').toggleClass('arrowGO');
    });
    // LIVE SPORTS - left side
    $('.cube01 > .title').on('click', function () {
        $(this).siblings('.frameALL').toggle();
        $(this).find('.arrowT').toggleClass('arrowGO');
    });
    // LIVE SPORTS - right side
    $('.bZone > .title').on('click', function () {
        $(this).siblings('.content').toggle();
        $(this).find('.arrowW').toggleClass('arrowGO');
    });

    // FOR MOBILE
    $('[id^="tab-"]').on('click', function () {
        var scWindow = $('#home-scroll-container');
        var windowFromTop = scWindow.offset().top;

        var tabNum = this.id.replace('tab-', '');
        var firstNavElem = $('#nav-' + tabNum + ':first');
        
        scWindow.scrollTop(0);
        var firstNavPos = firstNavElem.offset().top;
        scWindow.scrollTop(firstNavPos - windowFromTop);

        $('[id^="tab-"]').removeClass('active');
        $(this).addClass('active');
        
    });

    $('.icon-left-menu').on('click', function() {
        toggleSideMobile();
    });

    function toggleSideMobile() {
        $('nav.slide-content-left').toggleClass('is-visible-left');
        $('#out-wrapper').toggleClass("is-obscured-left left fixed");
    }

    function hideSideMobile() {
        $('nav.slide-content-left').removeClass('is-visible-left');
        $('#out-wrapper').removeClass("is-obscured-left left fixed");
    }
  
    // Select the target element
    var targetElement = $('.icon-left-menu');

    // Attach a click event to the document
    $('#content').on('click', function() {
        hideSideMobile();
    });
    $('#footer').on('click', function() {
        hideSideMobile();
    });


    // Slot Mobile
    $(document).on('click', '.slot-btn', function(event) {
        event.stopPropagation();
        
        var game = $(this).attr('id');
        // Use $.get() for a simpler GET request
        $.get('/pages/slots/' + game + '.php', function(data) {
          // Replace the content of the 'content' section with the loaded HTML
          $('#content').html(data);
        })
        .fail(function(error) {
          console.log('Error loading content:', error);
        });
      });

      $(document).on('click', '#choose-provider', function(event) {
        event.stopPropagation();
        
        $.get('/pages/slot_m.php', function(data) {
            var slotListContent = $(data).find('#content').html();
            $('#content').html(slotListContent);
          })
          .fail(function(error) {
            console.log('Error loading content:', error);
          });
      });

    // Live Sports
    // default on page load
    $(document).ready( function() {
        $('#live_sp').click();
    }); 

    $(document).on('click', '#live_eu', function(event) {
        event.stopPropagation();
        
        $.get('/pages/tab/_sports_eu_tab.php', function(data) {
          $('#live-sports-tab').html(data);
        })
        .fail(function(error) {
          console.log('Error loading content:', error);
        });
        $('.live-select').removeClass('active');
        $(this).addClass('active');
      });
    $(document).on('click', '#live_sp', function(event) {
        event.stopPropagation();
        
        $.get('/pages/tab/_livesports_tab.php', function(data) {
          $('#live-sports-tab').html(data);
        })
        .fail(function(error) {
          console.log('Error loading content:', error);
        });
        $('.live-select').removeClass('active');
        $(this).addClass('active');
      });
     
      $(document).on('click', '.sport-trigger', function() {
        console.log('sport-triggered');
        $(this).parent().toggleClass('content-visible');
        $(this).siblings().toggle();
      });

    
});


