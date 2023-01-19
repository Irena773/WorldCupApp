import {createApp} from 'vue'
import HelloWorldPropsComponent from './components/HelloWorldPropsComponent.vue'


const app = createApp({
    data(){
        return{
        showMessage: "Good Morning VueJS from Vue App",
        message1: "Good Morning VueJS from Vue App",
        message2: "Good Afternoon VueJS from Vue App",
        serverMessage: "",
        serverSelectData: "",
        selected: "",
        isDisplay: "block"
        }
    },
    mounted: function () {
        serverData = getServerData();
        this.serverMessage = serverData.message;
        this.serverSelectData = serverData.select_data;
    },
    methods: {
        changeMessage: function () {
            this.showMessage = this.message2;
        }
    }
});
app.component('helloworld_props-component',HelloWorldPropsComponent )
app.mount('#hello_vuejs')
