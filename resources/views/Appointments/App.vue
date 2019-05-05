<script>
import AppAppointments from "../../js/components/AppAppointments";
import AppToolbar from "../../js/components/AppToolbar";
import AppFooter from "../../js/components/AppFooter";

export default new Vue({
	el: "#app",
	mixins: [require("../../js/mixins/vuetify-mixin.vue").default],
	components: {
		AppAppointments,
		AppToolbar,
		AppFooter
	}
});
</script>