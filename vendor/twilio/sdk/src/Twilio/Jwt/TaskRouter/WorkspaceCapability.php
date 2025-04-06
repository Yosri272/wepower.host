<?php


namespace Twilio\Jwt\TaskRouter;


class WorkspaceCapability extends CapabilityToken {
    public function __construct(string $accountSid, string $authToken, string $workspaceSid,
<<<<<<< HEAD
                                string $overrideBaseUrl = null, string $overrideBaseWSUrl = null) {
=======
                                ?string $overrideBaseUrl = null, ?string $overrideBaseWSUrl = null) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        parent::__construct($accountSid, $authToken, $workspaceSid, $workspaceSid, null, $overrideBaseUrl, $overrideBaseWSUrl);
    }

    protected function setupResource(): void {
        $this->resourceUrl = $this->baseUrl;
    }
}
