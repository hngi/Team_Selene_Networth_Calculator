// ensure localstorage is supported before proceeding
if (!storageAvailable('localStorage')) throw new Error('Localstorage is not supported')
// storage layer must have these methods API, for this project we use the localstorage api
function saveObject(id, payload) {
    window.localStorage.setItem(id, JSON.stringify(payload))
}
function getObject(id) {
    const payload = window.localStorage.getItem(id)
    if (payload) return JSON.parse(payload)
    return null;
}
function updateObject(id, payload) {
    let obj = getObject(id)
    if (!obj) obj = {}
    Object.assign(obj, payload)
    saveObject(id, obj)
}
