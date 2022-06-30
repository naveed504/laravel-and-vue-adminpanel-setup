

export default {
    loadAllGroups({
        commit
    }) {
        axios.get('api/groups').then(response => {
            commit('updateAllGroups', response.data)
            console.log(response)
            console.log('LoadAllGroups from  actions')
        })
    },
}