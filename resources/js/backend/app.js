import './bootstrap';

import Alpine from "alpinejs";
import AlpineFloatingUI from '@awcodes/alpine-floating-ui'
import NotificationsAlpinePlugin from '../../../vendor/filament/notifications/dist/module.esm'
import flatpickr from "flatpickr";
import * as FilePond from "filepond";
import { createPopper } from "@popperjs/core";

Alpine.plugin(AlpineFloatingUI)
Alpine.plugin(NotificationsAlpinePlugin)

window.flatpickr = flatpickr;
window.FilePond = FilePond;
window.createPopper = createPopper;
window.Alpine = Alpine;

Alpine.start();

import '../../../vendor/wire-elements/modal/resources/js/modal';

import "./theme"
