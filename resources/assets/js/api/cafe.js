import {VUEROUTER_CONFIG} from "../config";

export default {
    /**
     *
     * @returns {*}
     */
    getCafes:function () {
        return axios.get(VUEROUTER_CONFIG + '/cafes');
    },

    /**
     *
     * @param cafeId
     * @returns {*}
     */
    getCafe:function (cafeId) {
        return axios.get(VUEROUTER_CONFIG + '/cafe/' + cafeId)
    },

    /**
     *
     * @param name
     * @param address
     * @param city
     * @param state
     * @param zip
     * @returns {*}
     */
    postNewCafe:function (name,address,city,state,zip) {
        return axios.post(VUEROUTER_CONFIG + '/cafes',
            {
               name:name,
               address:address,
               city:city,
               state:state,
               zip:zip,
            }
        )
    }
}