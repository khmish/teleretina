<script>
import AppPatientMedInfo from "../../js/components/AppPatientMedInfo";
import AppToolbar from "../../js/components/AppToolbar";
import AppFooter from "../../js/components/AppFooter";

export default new Vue({
	el: "#app",
	mixins: [require("../../js/mixins/vuetify-mixin.vue").default],
	components: {
		AppPatientMedInfo,
		AppToolbar,
		AppFooter
	}
});
</script>