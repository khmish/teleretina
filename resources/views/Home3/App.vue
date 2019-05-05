<script>
import AppHome from "../../js/components/AppHome3";
import AppToolbar from "../../js/components/AppToolbar";
import AppFooter from "../../js/components/AppFooter";

export default new Vue({
	el: "#app",
	mixins: [require("../../js/mixins/vuetify-mixin.vue").default],
	components: {
		AppHome,
		AppToolbar,
		AppFooter
	}
});
</script>