
<script>
  let tokenClient;
  let accessToken = null;
  let pickerInited = false;
  let gisInited = false;

  // Use the API Loader script to load google.picker
  function onApiLoad() {
    gapi.load('picker', onPickerApiLoad);
  }

  function onPickerApiLoad() {
    pickerInited = true;
  }

  function gisLoaded() {
    // TODO: Replace with your client ID and required scopes.
    tokenClient = google.accounts.oauth2.initTokenClient({
      client_id: '688794310095-lcpd263sfkvfqefop0f6j25oav1a4bng.apps.googleusercontent.com',
      scope: 'https://www.googleapis.com/auth/drive.file',
      callback: '', // defined later
    });
    gisInited = true;
  }
</script>
<!-- Load the Google API Loader script. -->
<script async defer src="https://apis.google.com/js/api.js" onload="onApiLoad()"></script>
<script async defer src="https://accounts.google.com/gsi/client" onload="gisLoaded()"></script>


<script>
// Create and render a Google Picker object for selecting from Drive.
function createPicker() {
  const showPicker = () => {
    const picker = new google.picker.PickerBuilder()
      .addView(google.picker.ViewId.DOCS)
      .setOAuthToken(accessToken)
      .setDeveloperKey('AIzaSyAH8mGCj6xFljzRV_wbGj0A-KF0aZeVU5I')
      .setCallback(pickerCallback)
      .build();
    picker.setVisible(true);
  }

  tokenClient.callback = async (response) => {
    if (response.error !== undefined) {
      throw (response);
    }
    accessToken = response.access_token;
    showPicker();
  };

  if (accessToken === null) {
    // Prompt the user to select a Google Account and ask for consent to share their data
    // when establishing a new session.
    tokenClient.requestAccessToken({prompt: 'consent'});
  } else {
    // Skip display of account chooser and consent dialog for an existing session.
    tokenClient.requestAccessToken({prompt: ''});
  }
}
    


</script>
<script >
// A simple callback implementation.
function pickerCallback(data) { 
  if (data.action == google.picker.Action.PICKED) {
    var fileId = data.docs[0].id; alert('The user selected: ' + fileId); 
  } 
} 


</script>