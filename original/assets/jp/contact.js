jQuery(document).ready(function ($) {
  $("form").on("submit", function (e) {
    e.preventDefault();

    if (!this.checkValidity()) {
      this.reportValidity();
      return;
    }

    const user_name = $("#user_name").val();
    const company_name = $("#company_name").val();
    const company_url = $("#company_url").val();
    const company_email = $("#company_email").val();
    const phonnumber = $("#phonnumber").val();
    const prefecture = $("#prefecture").val();
    const prepared = $("#prepared").val();
    const content = $("#content").val();

    $.ajax({
      url: my_ajax_obj.ajax_url,
      type: "POST",
      data: {
        action: "send_email",
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
        console.log("AJAX Success: ", response);
        alert("送信完了しました。");
      },
      error: function (xhr, status, error) {
        console.error("AJAX Error: ", error);
        alert("送信に失敗しました。");
      },
    });
  });
});