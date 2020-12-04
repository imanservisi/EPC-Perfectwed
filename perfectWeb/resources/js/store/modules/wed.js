import axios from 'axios'

const state = {
    projects: []
}
const getters = {}
const actions = {
    getProjects({commit}){
        axios.get('http://127.0.0.1:8000/api/projects')
        .then(response => {
            commit('SET_PROJECTS', response.data)
        })
    },
    addProject({commit}, { user_id, title_project, wed_date }) {
        axios.post(
            'http://127.0.0.1:8000/api/projects',
          {
            "user_id": user_id,
            "title_project": title_project,
            "wed_date": wed_date,
          }
        )
        .then(response => commit('ADD_PROJECT', { user_id, title_project, wed_date }))
    }
}

const mutations = {
    SET_PROJECTS(state, projects) {
        state.projects = projects
    },
    ADD_PROJECT (state, { user_id, title_project, wed_date }) {
            state.projects.push({ user_id, title_project, wed_date })
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}

/*var axios = require('axios');

var config = {
  method: 'get',
  url: 'http://127.0.0.1:8000/api/projects',
  headers: {
    'Authorization': 'Basic eWFubjo0N0JhdG8yMzE5JA=='
  }
};

axios(config)
.then(function (response) {
  console.log(JSON.stringify(response.data));
})
.catch(function (error) {
  console.log(error);
});*/
