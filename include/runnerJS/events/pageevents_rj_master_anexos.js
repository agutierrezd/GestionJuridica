
Runner.pages.PageSettings.addPageEvent('rj_master_anexos',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,'anexo_user');ctrl.makeReadonly();});