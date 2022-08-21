export default {
    publicAsset(path) {
        var base_path = window._asset || '';
        return base_path + 'public/assets/' + path;
    },
}