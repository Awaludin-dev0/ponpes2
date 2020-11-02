(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[1],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/admin/PenggunaComponent.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/admin/PenggunaComponent.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _lib_CrudComponent_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../lib/CrudComponent.vue */ "./resources/js/components/lib/CrudComponent.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      form: {
        name: '',
        email: '',
        password: '',
        role: ''
      },
      santri: [],
      kelas: [],
      fields: [{
        key: 'name',
        label: "Nama Pengguna"
      }, {
        key: 'email',
        label: 'Email'
      }, {
        key: 'role',
        label: 'Role'
      }],
      api: '/pengguna',
      roles: ['guru', 'ortu', 'kepsek', 'user', 'admin'],
      jeniskelamin: ['Laki-laki', 'Perempuan']
    };
  },
  components: {
    Crudcomp: _lib_CrudComponent_vue__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  mounted: function mounted() {
    var _this = this;

    console.log(this.$store.state.islogin);
    /* if (this.$store.state.isLogin === false) {
        this.$router.push('/')
    }*/

    this.form.id = -1;
    this.$store.dispatch('get', '/santribanin').then(function (resp) {
      var data = resp.data.data;

      for (var dt in data) {
        _this.santri.push({
          text: data[dt].nama_santri,
          value: data[dt].id
        });
      }
    });
    this.$store.dispatch('get', '/kelasbanin').then(function (resp) {
      var data = resp.data;

      for (var dt in data) {
        _this.kelas.push({
          text: data[dt].nama_kelas,
          value: data[dt].id
        });
      }
    });
  },
  watch: {},
  methods: {
    save: function save(id, event) {
      var _this2 = this;

      // alert('Hi')
      // return false
      console.log('save kelas santri');
      event.preventDefault();
      console.log(this.form);
      var actions = id == -1 ? 'save' : 'update';
      var endpoint = id == -1 ? this.api : this.api + '/' + id;
      this.$store.dispatch(actions, {
        endpoint: endpoint,
        data: this.form
      }).then(function (resp) {
        console.log($actions);

        _this2.$bvModal.hide('modal-form'); // this.$refs['modal-form'].hide()


        _this2.item = [];
      });
    },
    edit: function edit(item, index, target) {
      /* this.form = item
      console.log("Hi")
      this.$bvModal.show('modal-edit')*/
    },
    onEdit: function onEdit(evt) {
      console.log('Hi'); // console.log(evt[0])

      this.form = {
        id: evt[0].id,
        name: evt[0].name,
        email: evt[0].email,
        role: evt[0].role
      };
      console.log('form', this.form);
      this.$bvModal.show('modal-form');
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/admin/PenggunaComponent.vue?vue&type=template&id=6242265a&":
/*!**************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/admin/PenggunaComponent.vue?vue&type=template&id=6242265a& ***!
  \**************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "b-card",
    [
      _c(
        "b-modal",
        {
          attrs: { size: "lg", id: "modal-form", title: "title" },
          on: {
            ok: function($event) {
              return _vm.save(_vm.form.id, $event)
            }
          }
        },
        [
          _c(
            "p",
            [
              _c(
                "b-form",
                [
                  _c(
                    "b-form-group",
                    { attrs: { label: "Nama Pengguna", label_for: "name" } },
                    [
                      _c("b-form-input", {
                        attrs: {
                          required: "",
                          placeholder: "Masukkan Nama Pengguna",
                          options: _vm.santri
                        },
                        model: {
                          value: _vm.form.name,
                          callback: function($$v) {
                            _vm.$set(_vm.form, "name", $$v)
                          },
                          expression: "form.name"
                        }
                      })
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "b-form-group",
                    { attrs: { label: "Email", label_for: "kelas_banin_id" } },
                    [
                      _c("b-form-input", {
                        attrs: {
                          type: "email",
                          required: "",
                          placeholder: "Masukkan Email"
                        },
                        model: {
                          value: _vm.form.email,
                          callback: function($$v) {
                            _vm.$set(_vm.form, "email", $$v)
                          },
                          expression: "form.email"
                        }
                      })
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "b-form-group",
                    {
                      attrs: {
                        label: "Password",
                        label_for: "password",
                        description:
                          "Kosongkan apabila tidak ingin mengubah password"
                      }
                    },
                    [
                      _c("b-form-input", {
                        attrs: {
                          type: "password",
                          required: "",
                          placeholder: "Masukkan Password min 8 karakter",
                          options: _vm.kelas
                        },
                        model: {
                          value: _vm.form.password,
                          callback: function($$v) {
                            _vm.$set(_vm.form, "password", $$v)
                          },
                          expression: "form.password"
                        }
                      })
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "b-form-group",
                    {
                      attrs: {
                        label: "Jenis Kelamin",
                        label_for: "jenis_kelamin"
                      }
                    },
                    [
                      _c("b-form-select", {
                        attrs: { required: "", options: _vm.jeniskelamin },
                        model: {
                          value: _vm.form.jenis_kelamin,
                          callback: function($$v) {
                            _vm.$set(_vm.form, "jenis_kelamin", $$v)
                          },
                          expression: "form.jenis_kelamin"
                        }
                      })
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "b-form-group",
                    { attrs: { label: "Role", label_for: "roles" } },
                    [
                      _c("b-form-select", {
                        attrs: { required: "", options: _vm.roles },
                        model: {
                          value: _vm.form.role,
                          callback: function($$v) {
                            _vm.$set(_vm.form, "role", $$v)
                          },
                          expression: "form.role"
                        }
                      })
                    ],
                    1
                  )
                ],
                1
              )
            ],
            1
          )
        ]
      ),
      _vm._v(" "),
      _c("crudcomp", {
        attrs: {
          api: "/pengguna",
          title: "Data Kelas Santri",
          fieldsoutside: _vm.fields
        },
        on: {
          "edit-data": function($event) {
            return _vm.onEdit($event)
          }
        },
        model: {
          value: _vm.form,
          callback: function($$v) {
            _vm.form = $$v
          },
          expression: "form"
        }
      })
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/admin/PenggunaComponent.vue":
/*!*************************************************************!*\
  !*** ./resources/js/components/admin/PenggunaComponent.vue ***!
  \*************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _PenggunaComponent_vue_vue_type_template_id_6242265a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./PenggunaComponent.vue?vue&type=template&id=6242265a& */ "./resources/js/components/admin/PenggunaComponent.vue?vue&type=template&id=6242265a&");
/* harmony import */ var _PenggunaComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./PenggunaComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/PenggunaComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _PenggunaComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _PenggunaComponent_vue_vue_type_template_id_6242265a___WEBPACK_IMPORTED_MODULE_0__["render"],
  _PenggunaComponent_vue_vue_type_template_id_6242265a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/PenggunaComponent.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/PenggunaComponent.vue?vue&type=script&lang=js&":
/*!**************************************************************************************!*\
  !*** ./resources/js/components/admin/PenggunaComponent.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_PenggunaComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./PenggunaComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/admin/PenggunaComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_PenggunaComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/PenggunaComponent.vue?vue&type=template&id=6242265a&":
/*!********************************************************************************************!*\
  !*** ./resources/js/components/admin/PenggunaComponent.vue?vue&type=template&id=6242265a& ***!
  \********************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_PenggunaComponent_vue_vue_type_template_id_6242265a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./PenggunaComponent.vue?vue&type=template&id=6242265a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/admin/PenggunaComponent.vue?vue&type=template&id=6242265a&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_PenggunaComponent_vue_vue_type_template_id_6242265a___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_PenggunaComponent_vue_vue_type_template_id_6242265a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);