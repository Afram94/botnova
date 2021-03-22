<template>
    <div class="flex justify-center">
        <input type="text" class="border-2 border-gray-400 max-w-xs px-1 m-2" v-model="task.name"/>
        <button class="border-2 px-3 py-1 m-2" :class="[task.name ? 'active' : 'inactive']"
        @click="addTask()">Add</button>
    </div>
</template>

<script>
export default {
    name: "addTaskForm",
    data: function(){
        return {
            task: {
                name: ""
            },
        };
    },
    created(){
        
    },
    
    methods:{
        addTask(){
            if(this.task.name == ''){
                return;
            }

            axios.post('/api/v1/tasks ',{
                task: this.task
            })
            /* .then(response=>{
                if(response.status == 201){
                    this.task.name == "";
                } */
                .then((response)=>{
                this.task = response.data.data;
            })
            .catch((error)=>{
                alert(error)
            })

           /*  axios.post('/admin/tasks')
            .then((response)=>{
                this.task = response.data
            }).catch((error)=>{
                alert(error)
            }) */
        }
    },
    
}
</script>

<style scoped>
.plus{
   font-size:20px;
}
.active{
   background-color:#15ff00;
   border-radius: 5px;
}
.inactive{
   background-color: #999999;
   border-radius: 5px;
}
</style>