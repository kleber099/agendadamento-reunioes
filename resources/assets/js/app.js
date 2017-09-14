/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import CriarReuniao from './components/reuniao/CriarReuniao.vue';

import ElementUI from 'element-ui';
import fullCalendar from 'fullcalendar';

window.Vue = require('vue');
window.Vue.use(ElementUI);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    components: {CriarReuniao}
});


$('#calendar').fullCalendar({
    locale: 'pt-br',
    events: [
        {
            title: 'event1',
            start: '2017-09-12'
        },
        {
            title: 'event2',
            start: '2017-09-14',
            end: '2017-09-20'
        },
        {
            title: 'event3',
            start: '2017-09-24T12:30:00',
            allDay: false // will make the time show
        }
    ],

    eventClick: function(calEvent, jsEvent, view) {

        alert('Event: ' + calEvent.title);
        alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
        alert('View: ' + view.name);

        // change the border color just for fun
        $(this).css('border-color', 'red');

    },
    dayClick: function(date, jsEvent, view) {

        alert('Clicked on: ' + date.format());

        alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);

        alert('Current view: ' + view.name);

        // change the day's background color just for fun
        $(this).css('background-color', 'red');

    }
});
