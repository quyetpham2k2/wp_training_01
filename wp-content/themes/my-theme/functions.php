<?php
// Tắt thông báo cập nhật plugin
add_filter('pre_site_transient_update_plugins', '__return_null');