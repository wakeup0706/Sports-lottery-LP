jQuery(document).ready(function ($) {
  $("form").on("submit", function (e) {
    e.preventDefault();

    if (!this.checkValidity()) {
      this.reportValidity();
      return;
    }

    const user_name = $("#d_charge_name").val();
    const company_name = $("#d_corporation_name").val();
    const company_url = $("#d_company_url").val();
    const company_email = $("#d_email_address").val();
    const phonnumber = $("#d_telephon_number").val();
    const prefecture = $("#d_prefecture").val();
    const prepared = $("#d_consideration").val();
    const content = $("#d_other_question").val();

    $.ajax({
      url: my_ajax_obj.ajax_url,
      type: "POST",
      data: {
        action: "download_email",
        nonce: my_ajax_obj.nonce,
        user_name: user_name,
        company_name: company_name,
        company_url: company_url,
        company_email: company_email,
        phonnumber: phonnumber,
        prefecture: prefecture,
        prepared: prepared,
        content: content,
      },
      success: function (response) {
        if(response.success){
          location.href="https://kuji-cloud.com/lp/downloadconfirm";
        } else {
          alert(response.data);
        }
      },
    });
  });
});