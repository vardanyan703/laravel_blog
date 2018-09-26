
Vue.component('tag-list', {
    props: ['title','id'],
    template: '<li class="mb-40">{{ title }}' +
    '                            <div class="pull-right btn-group">\n' +
    '                                <button type="button" class="btn btn-info" v-on:click="$emit(\'edit\',id,title)" data-toggle="modal" data-target="#modal-center"><i class="fa fa-edit"></i> </button>\n' +
    '                                <button type="button" class="btn btn-danger" v-on:click="$emit(\'delete\',id)" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash" ></i> </button>\n' +
    '                            </div>\n' +
    '                        </li>'
});

const app = new Vue({
    el:'#tags',
    data:{
        tags:'',
        editTagName:'',
        editTagId:'',
        addNew:false,
        newTagName:''
    },
    mounted:function () {
        document.getElementsByClassName('tag_list')[0].classList.add("col-lg-12");
        var csrf = document.querySelector('#token').getAttribute('content');
        Vue.http.headers.common['X-CSRF-TOKEN'] = csrf;
        this.$http.post('/admin/blog/tags/get').then((response) => {
            console.log(response.data);
            this.tags = response.data;
        })
    },
    methods:{
        editTag:function (id,title) {
            this.editTagName = title;
            this.editTagId = id;
        },
        saveChange:function () {
            let data = new FormData();
            data.append('name',this.editTagName);
            data.append('id',this.editTagId);
            this.$http.post('/admin/blog/tags/edit',data).then(() => {
                const update =  document.getElementsByClassName('update_tags_list')[0];
                document.getElementsByClassName('modal_close')[0].click()
                update.style.background = 'green';
                update.children[1].style.color = 'white';
                update.children[1].innerHTML = "Edit Success";

                for(let i = 0;i < this.tags.length; i++)
                {
                    if(this.tags[i].id == this.editTagId)
                    {
                        this.tags[i].name = this.editTagName;
                    }
                }
                setTimeout(function () {
                    update.style.background = 'white';
                    update.children[1].style.color = '#455a64';
                    update.children[1].innerHTML = "Tags List";
                },1000)
            })
        },
        deleteTag:function(id){
            this.editTagId = id;
        },
        saveDelete:function () {
            let data = new FormData();
            data.append('id',this.editTagId);
            this.$http.post('/admin/blog/tags/delete',data).then((resource) => {
                document.getElementsByClassName('close_delete_modal')[0].click();
                const update =  document.getElementsByClassName('update_tags_list')[0];
                document.getElementsByClassName('modal_close')[0].click()
                update.style.background = 'red';
                update.children[1].style.color = 'white';
                update.children[1].innerHTML = "Delete Success";

                for(let i = 0;i < this.tags.length; i++)
                {
                    if(this.tags[i].id == this.editTagId)
                    {
                        this.tags.splice(i,1);
                    }
                }
                setTimeout(function () {
                    update.style.background = 'white';
                    update.children[1].style.color = '#455a64';
                    update.children[1].innerHTML = "Tags List";
                },1000)

            })
        },
        addNewTag:function () {
            let data = new FormData();
            if(this.newTagName == '')
                return false;
            data.append('name',this.newTagName);
            this.$http.post('/admin/blog/tags/add',data).then((resource)=>{
                this.tags.push(resource.data);
                const update =  document.getElementsByClassName('update_tags_list')[0];
                document.getElementsByClassName('modal_close')[0].click()
                update.style.background = 'green';
                update.children[1].style.color = 'white';
                update.children[1].innerHTML = "Add Success";
                this.newTagName = '';
                setTimeout(function () {
                    update.style.background = 'white';
                    update.children[1].style.color = '#455a64';
                    update.children[1].innerHTML = "Tags List";
                },1000)
            })
        },
        addTag:function () {
            this.addNew = true;
            let tag_list = document.getElementsByClassName('tag_list')[0];
            tag_list.classList.remove("col-lg-12");
            tag_list.classList.add("col-lg-8");
        },
        closeNewTag:function () {
            this.addNew = false;
            this.newTagName = '';
            let tag_list = document.getElementsByClassName('tag_list')[0];
            tag_list.classList.remove("col-lg-8");
            tag_list.classList.add("col-lg-12");
        }




    }
})
