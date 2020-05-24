  class CmsUser {
    constructor(url) {
      this.url = url;
    }
    like(token, postId, success, error) {
      var data = {token: token, post_id: postId};
      this.post(this.url + '/api/like_post', data, success, error);
    }
    get(url, data, success, error) {
      $.ajax({
        url: url,
        type: 'GET',
        data: data,
        success: function (data, textStatus, jqXHR) {
          if (data.status == 'OK') {
            success(data);
          } else {
            error(data);
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          error(jqXHR);
        }
      });
    }
    post(url, data, success, error) {
      $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function (data, textStatus, jqXHR) {
          if (data.status == 'OK') {
            success(data);
          } else {
            error(data.status);
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          error(jqXHR);
        }
      });
    }
  }