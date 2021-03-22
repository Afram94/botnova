<template>
  <div class=" m-auto w-2/5">
      <div class="bg-gray-300">
          <h2 class="text-center font-bold" id="title">Todo list</h2>
          <add-task-form></add-task-form>
      </div>
      <list-view></list-view>
      
      
  </div>
</template>
<script>

import addTaskForm from "./components/addTaskForm"
import listView from './components/listView';
export default {

    components: {
        addTaskForm,
        listView
    }
}
</script>