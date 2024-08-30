
<script src="./thema/assets/js/main.js"></script>
<script src="./thema/assets/js/plugins/apexcharts.min.js"></script>
<script src="./thema/assets/js/plugins/jsvectormap.min.js"></script>
<script src="./thema/assets/js/plugins/world.js"></script>
<script src="./thema/assets/js/plugins/world-merc.js"></script>
<script src="./thema/assets/js/pages/dashboard-default.js"></script>
<!-- [Page Specific JS] end -->
<!-- Required Js -->
<script src="./thema/assets/js/plugins/popper.min.js"></script>
<script src="./thema/assets/js/plugins/simplebar.min.js"></script>
<script src="./thema/assets/js/plugins/bootstrap.min.js"></script>
<script src="./thema/assets/js/fonts/custom-font.js"></script>
<script src="./thema/assets/js/pcoded.js"></script>
<script src="./thema/assets/js/plugins/feather.min.js"></script>

<script src="./thema/assets/js/layout-collapse.js"></script>
<script>
    layout_change('light');
</script>

<script>
    layout_sidebar_change('light');
</script>

<script>
    change_box_container('false');
</script>

<script>
    layout_caption_change('true');
</script>

<script>
    layout_rtl_change('false');
</script>

<script>
    preset_change('preset-1');
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.pc-item').forEach(item => {
            item.addEventListener('click', function(e) {
                const id = e.target.id;
                switch (e.target.id){
                    case "pc-tab-link-1":
                        window.location.href = `/`;
                        break;
                    case "pc-tab-link-2":
                        window.location.href = `/ecommerce`;
                        break;
                    case "pc-tab-link-3":
                        window.location.href = `/`;
                        break;
                    case "pc-tab-link-4":
                        window.location.href = `/`;
                        break;
                    case "pc-tab-link-5":
                        window.location.href = `/res`;
                        break;
                    case "pc-tab-link-6":
                        window.location.href = `/info`;
                        break;
                }
            });
        });
    });


</script>
