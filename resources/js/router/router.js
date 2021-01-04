import Vue from "vue"
import VueRouter from "vue-router"
import content_component from "../components/content/content";
import body_component from "../components/body";

Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        {
            path: '/', component: body_component,
            children: [
                {
                    path: '/content/:category', component: content_component, props: true,
                },
            ]
        },

    ],
    mode: 'history'
});

export default router;
