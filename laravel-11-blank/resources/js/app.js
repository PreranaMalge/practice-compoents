import './bootstrap';

import "bootstrap"; // Bootstrap Framework

//jquery
import $ from "jquery";
window.jQuery = window.$ = $;

import AOS from "aos";
AOS.init();

//invisible scrollbar
import "overlayscrollbars/overlayscrollbars.css";

import { OverlayScrollbars, ClickScrollPlugin } from "OverlayScrollbars";

// optional: use the ClickScrollPlugin to make the option "scrollbars.clickScroll: true" available
OverlayScrollbars.plugin(ClickScrollPlugin);

OverlayScrollbars(document.body, {
    clipAlways: false,
    scrollbars: {
        visibility: "auto",
        autoHide: "scroll",
        autoHideDelay: 1000,
        autoHideSuspend: true,
    },
});