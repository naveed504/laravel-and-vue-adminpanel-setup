import Dashboard from './components/Dashboard.vue';
import Tables from './components/Tables.vue';
import Books from './components/books/ShowBook.vue';
import CreateBook from './components/books/CreateBook.vue';
import EditBook from './components/books/EditBook.vue';
export const routes = [{
    name: 'dashboard',
    path: '/dashboard',
    component:Dashboard,
}, {
    name: 'tableview',
    path: '/tableview',
    component: Tables,
},
{
    name: 'books',
    path: '/books',
    component: Books,
},
{
    name: 'addnew',
    path: '/addnew',
    component: CreateBook,
},
{
    name:'editbook',
    path:'/editbook/:id',
    component: EditBook
},
   
];