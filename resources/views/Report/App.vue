<script>
import AppReport from "../../js/components/AppReport";
import AppToolbar from "../../js/components/AppToolbar";
import AppFooter from "../../js/components/AppFooter";

export default new Vue({
	el: "#app",
	mixins: [require("../../js/mixins/vuetify-mixin.vue").default],
	components: {
		AppReport,
		AppToolbar,
		AppFooter
	}
});
</script>