/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

// Index components
import IndexComponent from './components/IndexComponent.vue';
import IndexEmployeeComponent from './components/employees/IndexComponent.vue';
import IndexCustomerComponent from './components/customers/IndexComponent.vue';
import IndexOrderComponent from './components/orders/IndexComponent.vue';
// Create components
import CreateEmployeeComponent from './components/employees/CreateComponent.vue';
import CreateCustomerComponent from './components/customers/CreateComponent.vue';
import CreateOrderComponent from './components/orders/CreateComponent.vue';
// Edit components
import EditEmployeeComponent from './components/employees/EditComponent.vue';
import EditCustomerComponent from './components/customers/EditComponent.vue';
import EditOrderComponent from './components/orders/EditComponent.vue';
// Show components
import ShowEmployeeComponent from './components/employees/ShowComponent.vue';
import ShowCustomerComponent from './components/customers/ShowComponent.vue';
import ShowOrderComponent from './components/orders/ShowComponent.vue';
app.component('index-component', IndexComponent);
app.component('index-customer-component', IndexCustomerComponent);
app.component('index-order-component', IndexOrderComponent);
app.component('index-employee-component', IndexEmployeeComponent);
// Employee components
app.component('create-employee-component', CreateEmployeeComponent);
app.component('edit-employee-component', EditEmployeeComponent);
app.component('show-employee-component', ShowEmployeeComponent);
// Customer components
app.component('create-customer-component', CreateCustomerComponent);
app.component('edit-customer-component', EditCustomerComponent);
app.component('show-customer-component', ShowCustomerComponent);
// Order components
app.component('create-order-component', CreateOrderComponent);
app.component('edit-order-component', EditOrderComponent);
app.component('show-order-component', ShowOrderComponent);
app.mount('#app');
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */
