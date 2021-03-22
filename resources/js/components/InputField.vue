<template>
    <div class="relative pb-4">
        <label for="name"
               class="text-blue-500 pt-2 uppercase text-xs font-bold absolute">
               {{label}}

               <input type="text" id="name" 
               class="pt-8 w-full text-gray-900 border-b pb-2 focus:outline-none focus:border-blue-400" 
               :class="errorClassObject(name)"
               :placeholder="placeholder"
               v-model="value"
               @input="updadeField(name)"/>

               <p class="text-red-600 text-sm" v-text="errorMessage(name)">Error here</p>
        </label>
    </div>
</template>

<script>
export default {
    name:"InputField",
    props:["name", "lable", "placeholder","errors"],

    data(){
        return {
            value:""
        };
    }
}
</script>